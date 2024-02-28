<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class voitureRequest extends FormRequest
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
           
            'marque'=> 'required',
            'couleur'=> 'required',
            // 'nb_place'=> 'required',
            'modele'=> 'required',
            'nb_voiture' => 'required',
            // 'dispo'=> 'required',
            'tarif'=> 'required',
            'imgV'=> 'required|image|mimes:jpg,png,jpeg,svg',
        ];
    }
}
