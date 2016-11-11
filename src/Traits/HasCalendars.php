<?php

namespace Acacha\Periods\Traits;

use Acacha\Periods\Calendar;

/**
 * Class HasCalendars.
 *
 * @package Acacha\Periods\Traits
 */
trait HasCalendars
{
    /**
     * The calendars that belongs to the model.
     */
    public function calendars()
    {
        return $this->belongsToMany(Calendar::class);
    }
}