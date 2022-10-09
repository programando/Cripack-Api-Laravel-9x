<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';
    public const HOME = '/home';

    // retiramos   prefix('api')   para no tener que anteponer /api  a las llamadas a mi api
    //Route::namespace($this->namespace)
    //  ->group(base_path('routes/api.php'));

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('api')
                ->namespace($this->namespace)
                ->group( function() {
                require base_path('routes/api.php');
                require base_path('routes/clientes/index.php');
                require base_path('routes/clientes/clientesVisitas.php');
                require base_path('routes/clientes/asistenciasMaquinas.php');
                require base_path('routes/clientes/empleados.php');
            });  

           /* Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
            
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
            */    
        });
    }

 
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
