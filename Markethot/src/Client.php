<?php

declare(strict_types=1);

namespace Markethot;

use GuzzleHttp\Client as GuzzleClient;
use JMS\Serializer\SerializerBuilder;
use Markethot\Contracts\RequestInterface;
use Psr\Http\Message\ResponseInterface;


/**
 * Class Client
 *
 * @method  Responses\ProductsResponse getProducts(Requests\ProductsRequest $request)
 * @package MarketClient
 */
class Client
{
    /**
     * @var array
     */
    private $maps = [
        Requests\ProductsRequest::class => Responses\ProductsResponse::class
    ];

    /**
     * @var \GuzzleHttp\Client
     */
    private $http;

    /**
     * @var \JMS\Serializer\Serializer
     */
    private $serializer;

    /**
     * request url
     * @var string
     */
    private const BASE_URL = 'https://markethot.ru/export';

    /**
     * MarketClient constructor.
     */
    public function __construct()
    {
        $this->http = new GuzzleClient();
        $this->serializer = SerializerBuilder::create()->build();
    }


    /**
     * @param   string  $name
     * @param   array   $args
     * @return  mixed
     * @throws  \Exception
     */
    public function __call($name, $args)
    {
        /** @var \Markethot\Contracts\RequestInterface $request */
        $request = $args[0];
        if (!$request instanceof RequestInterface) {
            throw new \InvalidArgumentException('First parameter must be an instance of ' . RequestInterface::class);
        }

        return $this->sendRequest($request);
    }

    /**
     * @param \Markethot\Contracts\RequestInterface $request
     *
     * @return array|\JMS\Serializer\scalar|mixed|object
     * @throws \Exception
     */
    public function sendRequest(RequestInterface $request)
    {
        $response = $this->http->request(
            $request->getMethod(),
            $this->getUrl().$request->getEndpoint()
        );

        return $this->deserialize($request, $response);
    }

    /**
     * @return string
     */
    private function getUrl()
    {
        return static::BASE_URL;
    }

    /**
     * @param \Markethot\Contracts\RequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface   $response
     *
     * @return array|\JMS\Serializer\scalar|mixed|object
     * @throws \Exception
     */
    private function deserialize(RequestInterface $request, ResponseInterface $response)
    {
        $class = \get_class($request);

        if (array_key_exists($class, $this->maps)) {
            return $this->serializer->deserialize($response->getBody(), $this->maps[$class], 'json');
        }

        throw new \Exception("Class [$class] not mapped.");
    }
}