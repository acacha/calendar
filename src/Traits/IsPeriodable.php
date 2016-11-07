<?php

namespace Acacha\Periods\Traits;

/**
 * Class IsPeriodable.
 *
 * @package Acacha\Periods\Traits
 */
trait IsPeriodable
{
    /**
     * Get all of the owning commentable models.
     */
    public function periodable()
    {
        return $this->morphTo();
    }
}