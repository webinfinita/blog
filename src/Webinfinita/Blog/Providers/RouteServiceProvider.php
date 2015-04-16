<?php namespace Webinfinita\Blog\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    protected $namespace = 'Webinfinita\Blog';

    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function() use ($router)
        {
            $router->resource('blog', 'PostsController');
        });
    }

}