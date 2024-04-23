<?php

namespace App\Http\Api\Tours;

use App\ValueObjects\Undefined;
use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    public function authorize(): Response
    {
        return new Response();
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
        ];
    }

    public function name(): string|Undefined
    {
        return $this->undefinedString('name');
    }
}
