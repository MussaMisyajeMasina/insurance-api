<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PolicyRequest extends FormRequest
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
            'client_id'=>'Required|max:25:policies',
              'CategoryName'=>'Required|max:25:policies',
               'PolicyNumber'=>'Required|max:10:policies',
                'EffectiveDate'=>'Required|max:25:policies',
                 'ExpireDate'=>'Required|max:255|unique:policies',

        ];
    }
}
