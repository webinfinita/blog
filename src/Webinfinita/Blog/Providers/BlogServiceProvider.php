<?php namespace Webinfinita\Blog\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../publish/views', 'webinfinita/blog');

        $this->publishes([
            __DIR__.'/../publish/migrations/' => database_path('/migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../publish/views/' => base_path('resources/views/vendor/webinfinita'),
        ]);

    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Webinfinita\Blog\Providers\RouteServiceProvider');
        $this->app->register('Illuminate\Html\HtmlServiceProvider');

        $loader = AliasLoader::getInstance();

        $loader->alias('Form', 'Illuminate\Html\FormFacade');
        $loader->alias('Html', 'Illuminate\Html\HtmlFacade');
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
