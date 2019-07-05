<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'Required|max:25:users',
              'email'=>'Required|max:25:users',
               'email_verified_at'=>'Required|max:10:users',
                'created_at'=>'Required|max:25:users',


        ];
    }
}
