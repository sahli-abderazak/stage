<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signuprequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'nom' => 'required|min:3|max:20',
            'prenom' =>'required|min:3|max:20',
            'login' =>'required|unique:admins|email',
            'password' =>'required|min:8',
        ];
    }
}
