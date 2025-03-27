<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEbookPriceRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'prices' => 'required|array',
            'prices.*' => 'numeric|min:0'
        ];
    }

    public function messages(): array
    {
        return [
            'prices.required' => 'Musisz podać cenę dla ebooka.',
            'prices.*.numeric' => 'Cena musi być liczbą.',
            'prices.*.min' => 'Cena nie może być ujemna.',
        ];
    }
}
