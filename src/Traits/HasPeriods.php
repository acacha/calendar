<?php

namespace Acacha\Periods\Traits;

use Acacha\Periods\Period;

/**
 * Class HasPeriods.
 *
 * @package Acacha\Periods
 */
trait HasPeriods
{
    /**
     *  The periods that belongs to the model.
     */
    public function periods()
    {
        return $this->morphMany(Period::class, 'periodable');
    }
}