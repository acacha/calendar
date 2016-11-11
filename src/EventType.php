<?php

namespace Acacha\Periods;

use Acacha\Periods\Traits\IsPeriodable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventType.
 *
 * @package Acacha\Periods
 */
class EventType extends Model
{
    /**
     * Get the events for the event type.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
