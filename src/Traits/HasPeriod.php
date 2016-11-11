<?php

namespace Acacha\Periods\Traits;


use Acacha\Periods\Period;

trait HasPeriod
{
    /**
     * Get the period that owns the model.
     */
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
}