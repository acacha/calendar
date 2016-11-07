<?php

namespace Acacha\Periods;

/**
 * Class AcachaPeriods.
 *
 * @package Acacha\Periods
 */
class AcachaPeriods
{
    public static function factories()
    {
        return [
            ACACHA_PERIODS_PATH . '/database/factories/PeriodFactory.php' =>
                database_path('/factories/PeriodFactory.php'),
        ];
    }

    public static function configs()
    {
        return [
            ACACHA_PERIODS_PATH . '/config/periods.php' =>
                config_path('periods.php'),
        ];
    }
}