<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDcComicRequest extends FormRequest
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
            'title' => ['required', 'min:3'], // min 3 sta a dire che c vogliono minimo 3 caratteri altrimenti genera un errore che abbiamo settato in .
            'price' => ['required'],
            'sale_date' => ['required'],
            'description' => ['min:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.min' => 'Il titolo é troppo corto',
            'price.required' => 'Devi inserire il prezzo',
            'sale_date.required' => 'Devi inserire una data di rilascio',
            'description.min' => 'La descrizione deve contenere almeno 10 caratteri'
        ];
    }
}
