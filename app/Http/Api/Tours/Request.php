<?php

namespace App\Http\Api\Tours;

use App\ValueObjects\Undefined;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    public function authorize(Gate $gate): \Illuminate\Auth\Access\Response
    {
        return \Illuminate\Auth\Access\Response::allow();
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
