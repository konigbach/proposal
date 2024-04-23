<?php

namespace App\Http\Api\Tours;

use App\Models\Tour;

final readonly class Response
{
    public function __construct(
        public Tour $tour
    ){
    }
}
