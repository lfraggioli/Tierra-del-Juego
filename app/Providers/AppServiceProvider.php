<?php

namespace App\Providers;


use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('crear_equipo', function($usuario){
            $rol = $usuario->rol;

            $puedeAcceder = false;

            switch ($rol){
                case 'capitan': $puedeAcceder = true; break;
                case 'jugador': $puedeAcceder = false; break;
                
            }

            return $puedeAcceder;
        });
    }
}
