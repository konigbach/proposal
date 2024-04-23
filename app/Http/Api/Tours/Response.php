<?php

namespace App\Http\Api\Tours;

use App\Models\Tour;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

final readonly class Response implements Responsable
{
    public function __construct(
        public Tour $tour
    ) {
    }

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse([
            'data' => [
                'id' => $this->tour->id,
            ],
        ], SymfonyResponse::HTTP_CREATED);
    }
}
