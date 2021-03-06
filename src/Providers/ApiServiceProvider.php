<?php
namespace Maras0830\BattleNetApi\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ApiServiceProvider
 * @package Skmetaly\BattlenetApi\Providers
 */
class ApiServiceProvider extends ServiceProvider  {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerServices();
    }
    /**
     *  Boot
     */
    public function boot()
    {
        $this->addConfig();
    }
    /**
     *  Registering services
     */
    private function registerServices()
    {
        $this->app->bind('Maras0830\BattleNetApi\Services\ApiService','Maras0830\BattleNetApi\Services\ApiService');
    }
    /**
     *  Config publishing
     */
    private function addConfig()
    {
        $this->publishes([
            __DIR__.'/../../config/battlenet-api.php' => config_path('battlenet-api.php'),
        ]);
    }
}