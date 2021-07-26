<?php

namespace Davidpiesse\NovaToggle;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-toggle', __DIR__.'/../dist/js/field.js');
        });
    
        $this->app->booted(function () {
            $this->routes();
        });
    }
    
    
    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }
        
        Route::middleware('nova')
            ->post('nova-vendor/nova-toggle/toggle/{resource}', [ApiController::class, 'index']);
    }
}
