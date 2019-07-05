<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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

             'policy_id'=>'Required|max:25:vehicles',
              'MakeYear'=>'Required|max:25:vehicles',
               'color'=>'Required|max:10:vehicles',
                'NumberPlate'=>'Required|max:25|unique:vehicles',


        ];
    }
}
