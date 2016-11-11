<?php

namespace Acacha\Periods;

use Acacha\Periods\Traits\IsPeriodable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event.
 *
 * @package Acacha\Periods
 */
class Event extends Model
{
    use HasCalendars;

    /**
     * Get the event type that owns the event.
     */
    public function type()
    {
        return $this->belongsTo(EventType::class);
    }
}
