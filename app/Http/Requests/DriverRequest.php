<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'vehicle_id'=>'Required|max:25:drivers',
            'Fname'=>'Required|max:25:drivers',
              'Lname'=>'Required|max:25:drivers',
                 'email'=>'Required|max:255|unique:drivers',
                  'DriverForBussinesPurpose'=>'Required|max:25:drivers'
        ];
    }
}
