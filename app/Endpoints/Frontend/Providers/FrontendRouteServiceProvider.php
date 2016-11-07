<?php

namespace App\Endpoints\Frontend\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Route;

class FrontendRouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Endpoints\Frontend\Http\Controllers';

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    public function map()
    {
        Route::group([
            'namespace' => $this->namespace,
        ], function ($router) {
            require __DIR__ . '/../Http/routes.php';
        });
    }
}
