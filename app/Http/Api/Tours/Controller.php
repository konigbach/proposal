<?php

namespace App\Http\Api\Tours;

use App\Actions\Tours\CreateTour;

final readonly class Controller
{
    public function __construct(
        private CreateTour\Action $action
    ) {
    }

    public function __invoke(Request $request): Response
    {
        $response = $this->action->execute(
            new CreateTour\ActionOptions(
                name: $request->name(),
            )
        );

        return new Response($response->tour);
    }
}
