<?php

declare(strict_types=1);

namespace Markethot\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Offer
 *
 * @package Markethot\Entity
 */
class Offer extends AbstractEntity
{
    /**
     * @JMS\SerializedName("id")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $id;

    /**
     * @JMS\SerializedName("article")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $article;

    /**
     * @JMS\SerializedName("price")
     * @JMS\Type("float")
     *
     * @var float
     */
    protected $price;

    /**
     * @JMS\SerializedName("sales")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $sales;

    /**
     * @JMS\SerializedName("amount")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $amount;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getArticle(): string
    {
        return $this->article;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getSales(): int
    {
        return $this->sales;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}