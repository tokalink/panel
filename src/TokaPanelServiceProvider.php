<?php

namespace Tokalink\Panel;

use Illuminate\Support\ServiceProvider;
use Tokalink\Panel\Commands\TokaPanelInstallCommand;

class TokaPanelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        

        if($this->app->runningInConsole()) {
           
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'panel');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/localization','panel');
        $this->loadViewComponentsAs('panel', [
            'TokaPanel' => \TokaPanel::class,
        ]);

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/tokalink/panel'),
        ], 'public');
        
        $this->registerSingleton();

        if($this->app->runningInConsole()) {
            $this->commands('PanelInstall');
        }
       
    }

    private function registerSingleton(){
        $this->app->singleton('PanelInstall', function ($app) {
            return new TokaPanelInstallCommand;
        });
    }
}
