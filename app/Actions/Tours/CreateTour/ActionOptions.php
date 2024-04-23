<?php

namespace App\Actions\Tours\CreateTour;

final readonly class ActionOptions
{
    public function __construct(
        public string $name,
    ) {
    }
}
