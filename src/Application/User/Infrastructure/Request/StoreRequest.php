<?php

declare(strict_types=1);

namespace Src\Application\User\Infrastructure\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Src\Application\User\Domain\Exceptions\ValidationRequestFailed;
use Src\Shared\Infrastructure\Helpers\StringFormater;

final class StoreRequest extends FormRequest
{

    use StringFormater;

    public function rules(): array
    {
        return [
            'user_name' => 'required|string|max:45',
            'first_name' => 'required|string|max:45',
            'second_name' => 'nullable|string|max:45',
            'first_last_name' => 'required|string|max:45',
            'second_last_name' => 'nullable|string|max:45',
            'email' => 'required|email|unique:users',
            'cellphone' => 'nullable|max:12',
            'password' => 'required|max:125',
            'state_id' => 'required|integer'
        ];
    }

    public function messages(): array
    {
        return [
            'user_name.required' => 'El user_name es requerido',
            'user_name.string' => 'El user_name debe ser string',
            'user_name.max' => 'El user_name debe ser de maximo 45 caracteres',

            'first_name.required' => 'El first_name es requerido',
            'first_name.string' => 'El first_name debe ser string',
            'first_name.max' => 'El first_name debe ser de maximo 45 caracteres',

            'second_name.string' => 'El second_name debe ser string',
            'second_name.max' => 'El second_name debe ser de maximo 45 caracteres',

            'first_last_name.required' => 'El first_last_name es requerido',
            'first_last_name.string' => 'El first_last_name debe ser string',
            'first_last_name.max' => 'El first_last_name debe ser de maximo 45 caracteres',

            'second_last_name.string' => 'El second_last_name debe ser string',
            'second_last_name.max' => 'El second_last_name debe ser de maximo 45 caracteres',

            'email.required' => 'El email es requerido',
            'email.email' => 'El email debe ser email',
            'email.unique' => 'El email debe ser ser unico',

            'cellphone.max' => 'El cellphone debe ser de maximo 12 caracteres',

            'password.required' => 'El password es requerido',
            'password.max' => 'El password debe ser de maximo 125 caracteres',

            'state_id.required' => 'El state_id es requerido',
            'state_id.integer' => 'El state_id debe ser integer',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new ValidationRequestFailed($this->formatErrorsRequest($validator->errors()->all()), 400);
    }
}