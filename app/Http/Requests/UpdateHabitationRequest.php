<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHabitationRequest extends FormRequest
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
            'nom' => 'required',
            'description' => 'required',
            'ville' => 'required',
            'cp' => 'required',
            'cuisine' => 'required',
            'salle_de_bain' => 'required',
            'toilettes' => 'required',
            'nb_pieces' => 'required',
            'nb_chambres' => 'required',
            'surface' => 'required',
            'annee' => 'required',
            'prix' => 'required',
            'image1' => 'nullable|image',
            'image2' => 'nullable|image',
            'image3' => 'nullable|image',
            'category_id' => 'required'
        ];
    }
}
