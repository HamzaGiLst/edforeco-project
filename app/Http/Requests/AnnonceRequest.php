<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnonceRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [

            'job'=>['required', 'string', 'max:255'],
            'entreprise'=> ['required', 'string', 'max:255'],
            'loca'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contrat'=>'required',
            'starts'=>['required','integer'],
            'ends'=>['required','integer'],
            'per'=>'required',
            'desc_company'=>['required','min:20'],
            'desc_poste'=>['required','min:20'],
            'profil_needed'=>['required','min:20']
        ];
    }
}
