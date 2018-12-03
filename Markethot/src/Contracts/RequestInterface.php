<?php

declare(strict_types=1);

namespace Markethot\Contracts;

/**
 * Interface Request
 *
 * @package Markethot\Contracts
 */
interface RequestInterface
{

    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * HTTP method (GET, POST, PUT, PATCH, DELETE)
     *
     * @return string
     */
    public function getMethod(): string;
}