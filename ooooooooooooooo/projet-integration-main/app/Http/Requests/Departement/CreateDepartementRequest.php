<?php

namespace App\Http\Requests\Departement;

use Illuminate\Foundation\Http\FormRequest;

class CreateDepartementRequest extends FormRequest
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
            'name' => 'required|min:5'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nom du département',
        ];
    }
}
