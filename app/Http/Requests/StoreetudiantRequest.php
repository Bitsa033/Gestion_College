<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreetudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'surname' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'classe' => ['required', 'string', 'max:255'],
        ];
    }
}
