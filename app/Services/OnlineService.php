<?php

namespace App\Services;

class OnlineService extends POSService
{
    public function getViews(string $period = 'week'): array
    {
        // Use base class method or add custom logic
        return parent::getViews($period);
    }
}
