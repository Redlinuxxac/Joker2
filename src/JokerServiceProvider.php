<?php

namespace Reddatasrd\Joker;

use Reddatasrd\Joker\Joker;
use Illuminate\Support\ServiceProvider;

class JokerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //rutas
        $this->registerRoutes();
        //controlador
        $this->app->make('Reddatasrd\Joker\Controllers\MainController');

         //Resources 
         $this->registerResources();
         //Migrations 
         $this->registerMigrations();
         //clase broma
         $this->app->bind('Joker', function($app){
             return new Joker();
         });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    
    protected function registerRoutes(): void
    {
        require_once __DIR__ . '/../routes/web.php';
    }
    
    protected function registerResources(): void
    {        
        //Load the views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'belich');
        //Load language translations...
        $this->loadTranslationsFrom(resource_path('lang/vendor/belich'), 'belich');
        $this->loadJsonTranslationsFrom(resource_path('lang/vendor/belich'), 'belich');
    }
    protected function registerMigrations():void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}