<?php

declare(strict_types=1);

namespace Markethot\Requests;

use Markethot\Contracts\RequestInterface;

/**
 * Class ProductsRequest
 *
 * @package Markethot\Requests
 */
class ProductsRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var string
     */
    protected $endpoint = '/bestsp';

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
}