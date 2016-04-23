<?php

namespace cumplemes\Providers;

use Illuminate\Support\ServiceProvider;

class CarroCompraServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        view()->composer(
            'partials.carro.contenido_carro', 'cumplemes\Http\ViewComposers\CarroComposer'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}