<?php

namespace App\Actions\Tours\CreateTour;

use App\Models\Tour;

final readonly class ActionResponse
{
    public function __construct(
        public Tour $tour
    ) {
    }
}
