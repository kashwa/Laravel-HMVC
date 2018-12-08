<?php

namespace Modules\HirMVC\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\HirMVC\Http\Interfaces\hirmvc;
use Modules\HirMVC\Http\Repository\hirmvcRepository;

class HmvcServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Modules\HirMVC\Http\Interfaces\hirmvc',
            'Modules\HirMVC\Http\Repository\hirmvcRepository'
//            hirmvc::class, hirmvcRepository::class
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
