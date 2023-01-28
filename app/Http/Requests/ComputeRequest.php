<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "number" => "required|integer"
        ];
    }

    public function messages()
    {
        return [
            "number.required" => "Veuillez entrez une valeur",
            "number.integer" => "Veuillez entrer un nombre entier"
        ];
    }
}
