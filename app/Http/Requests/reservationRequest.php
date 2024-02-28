<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reservationRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'numtelephone' => 'required',
            'date_naissance' => 'required',
            'adresse' => 'required',
            'date_permis' =>'required',
            'dateDebut'=>'required',
            'dateRetour'=>'required',
            'total',
            'id_voiture',
            'id_client',


        ];
    }
}
//     // function ($attribute, $value, $fail) {
            //     //     // Vérifiez si la date_permis est supérieure à 2 ans par rapport à la date d'aujourd'hui
            //     //     $twoYearsAgo = Carbon::now()->subYears(2);
            //     //     if (Carbon::parse($value)->lte($twoYearsAgo)) {
            //     //         $fail('La date du permis doit être supérieure à 2 ans par rapport à la date d\'aujourd\'hui.');
            //     //     }
            //     // },
           
