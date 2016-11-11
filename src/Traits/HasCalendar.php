<?php

namespace Acacha\Periods\Traits;

use Acacha\Periods\Calendar;

/**
 * Class HasCalendar.
 *
 * @package Acachas\Periods
 */
trait HasCalendar
{
    /**
     *  The calendar that belongs to the model.
     */
    public function calendar()
    {
        return $this->hasOne(Calendar::class);
    }
}