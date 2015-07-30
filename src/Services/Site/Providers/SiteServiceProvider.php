<?php

namespace Directory\Services\Site\Providers;

use App;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class SiteServiceProvider extends ServiceProvider
{
    /**
     * Register the Site module service provider.
     */
    public function register()
    {
        // This service provider is a convenient place to register your modules
        // services in the IoC container. If you wish, you may make additional
        // methods or service providers to keep the code more focused and granular.
        App::register('Directory\Services\Site\Providers\RouteServiceProvider');

        $this->registerNamespaces();
    }

    /**
     * Register the Site module resource namespaces.
     */
    protected function registerNamespaces()
    {
        Lang::addNamespace('site', realpath(__DIR__.'/../Resources/Lang'));

        View::addNamespace('site', realpath(__DIR__.'/../Resources/Views'));
    }
}
