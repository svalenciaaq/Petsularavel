<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePetRequest extends Request
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
            'name' => 'required|max:30' ,
            'race' => 'required|max:10',
            'age' => 'required|max:50',
            'subject' => 'required|max:50',
            'owner' => 'required|max:50',
            'cellphone' => 'required|max:50',
            'date' => 'required|max:50',
            
        ];
    }
}
