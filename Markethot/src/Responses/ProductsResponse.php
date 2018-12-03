<?php

declare(strict_types=1);

namespace Markethot\Responses;

use JMS\Serializer\Annotation as JMS;
use Markethot\Entity\Product;

/**
 * Class ProductsResponse
 *
 * @package Markethot\Responses
 */
class ProductsResponse
{
    /**
     * @JMS\XmlList(entry = "products", inline = true)
     * @JMS\Type("array<Markethot\Entity\Product>")
     *
     * @var array|Product[]
     */
    protected $products;

    /**
     * @return array|Product[]
     */
    public function getProducts()
    {
        return $this->products;
    }
}