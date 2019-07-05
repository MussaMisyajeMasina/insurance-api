<?php

namespace App\Http\Resources\Client;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
            'id'=>$this-> id,
            'Fname'=>$this-> Fname,
            'Lname'=>$this-> Lname,
            'gender'=>$this-> gender,
            'PhoneNumber'=>$this-> PhoneNumber,
            'email'=>$this-> email,
            'district'=>$this-> district,
            'created_at'=>$this-> created_at,


        ];
    }
}
