<?php

declare(strict_types=1);

namespace Markethot;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 * Class MarkethotServiceProvider
 *
 * @package Markethot
 */
class MarkethotServiceProvider extends ServiceProvider
{

    /**
     * @var bool
     */
    protected $defer = true;

    /**
     *
     */
    public function boot()
    {
        AnnotationRegistry::registerLoader('class_exists');
    }

    /**
     *
     */
    public function register()
    {
        $this->app->singleton(Client::class, function (Application $app) {
            return new Client();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [Client::class];
    }
}