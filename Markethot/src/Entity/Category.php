<?php

declare(strict_types=1);

namespace Markethot\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Category
 *
 * @package Markethot\Entity
 */
class Category extends AbstractEntity
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
     * @JMS\SerializedName("alias")
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $alias;


    /**
     * @JMS\SerializedName("parent")
     * @JMS\Type("int")
     *
     * @var int
     */
    protected $parent_id;

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
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }
}