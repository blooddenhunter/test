<?php

declare(strict_types=1);

namespace Markethot\Entity;

use JMS\Serializer\Annotation as JMS;
use Markethot\Entity\Offer;
use Markethot\Entity\Category;

/**
 * Class Product
 *
 * @package Markethot\Entity
 */
class Product extends AbstractEntity
{
    /**
     * @JMS\SerializedName("id")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $id;

    /**
     * @JMS\SerializedName("title")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $title;

    /**
     * @JMS\SerializedName("image")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $image;

    /**
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     *
     * @var null|string
     */
    protected $description;

    /**
     * @JMS\SerializedName("first_invoice")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $first_invoice;

    /**
     * @JMS\SerializedName("url")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $url;

    /**
     * @JMS\SerializedName("price")
     * @JMS\Type("float")
     *
     * @var float
     */
    protected $price;

    /**
     * @JMS\SerializedName("amount")
     * @JMS\Type("float")
     *
     * @var float
     */
    protected $amount;

    /**
     * @JMS\XmlList(entry = "offers", inline = true)
     * @JMS\Type("array<Markethot\Entity\Offer>")
     *
     * @var array|Offer[]
     */
    protected $offers;

    /**
     * @JMS\XmlList(entry = "categories", inline = true)
     * @JMS\Type("array<Markethot\Entity\Category>")
     *
     * @var array|Category[]
     */
    protected $categories;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getFirstInvoice(): string
    {
        return $this->first_invoice;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return array|\Markethot\Entity\Offer[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * @return array|\Markethot\Entity\Category[]
     */
    public function getCategories()
    {
        return $this->categories;
    }
}