<?php

declare(strict_types=1);

namespace Markethot\Contracts;

/**
 * Interface ArrayableInterface
 *
 * @package Markethot\Contracts
 */
interface ArrayableInterface
{
    /**
     * Converts object to array
     *
     * @return  array
     */
    public function toArray();
}