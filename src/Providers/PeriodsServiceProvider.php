<?php

use Acacha\Periods\AcachaPeriods;
use Illuminate\Support\ServiceProvider;

/**
 * Class PeriodsServiceProvider.
 */
class PeriodsServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (!defined('ACACHA_PERIODS_PATH')) {
            define('ACACHA_PERIODS_PATH', realpath(__DIR__.'/../../'));
        }
    }

    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories();
        $this->publishConfig();
    }

    private function loadMigrations()
    {
        $this->loadMigrationsFrom(ACACHA_PERIODS_PATH . '/database/migrations');
    }

    private function publishFactories()
    {
        $this->publishes(
            AcachaPeriods::factories(),"acacha_periods"
        );
    }

    private function publishConfig() {
        $this->publishes(
            AcachaPeriods::configs(),"acacha_periods"
        );
        $this->mergeConfigFrom(
            ACACHA_PERIODS_PATH . '/config/periods.php', 'acacha_periods'
        );
    }
}