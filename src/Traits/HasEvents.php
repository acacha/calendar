<?php

namespace Acacha\Periods\Traits;
use Acacha\Periods\Event;

/**
 * Class HasEvents.
 *
 * @package Acacha\Periods\Traits
 */
trait HasEvents
{
    /**
     * The events that belong to the model.
     */
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}