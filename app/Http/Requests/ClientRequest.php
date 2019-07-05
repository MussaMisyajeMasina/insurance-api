<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
             'Fname'=>'Required|max:25:clients',
              'Lname'=>'Required|max:25:clients',
               'gender'=>'Required|max:10:clients',
                'PhoneNumber'=>'Required|max:25:clients',
                 'email'=>'Required|max:255|unique:clients',
                  'district'=>'Required|max:25:clients'
        ];
    }
}
