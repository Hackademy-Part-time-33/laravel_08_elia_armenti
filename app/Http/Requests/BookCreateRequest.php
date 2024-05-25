<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
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
            'title'=>'required',
            'year'=>'nullable|integer',
            'pages'=>'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Il titolo deve essere obbligatorio',
            'year.integer'=>'Inserire data corretta',
            'pages.integer'=>'devi inserire un numero di pagine valido',
        ];
    }

}
