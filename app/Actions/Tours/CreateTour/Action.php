<?php

namespace App\Actions\Tours\CreateTour;

use App\Events\TourCreated;
use App\Models\Tour;
use Illuminate\Contracts\Events\Dispatcher;

final readonly class Action
{
    public function __construct(
        private Dispatcher $dispatcher,
    ) {
    }

    public function execute(ActionOptions $options): ActionResponse
    {
        $tour = new Tour();
        $tour->name = $options->name;

        $tour->saveOrFail();

        $this->dispatcher->dispatch(new TourCreated($tour));

        return new ActionResponse($tour);
    }
}
