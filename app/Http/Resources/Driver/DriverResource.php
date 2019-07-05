<?php

namespace App\Http\Resources\Driver;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
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
            'vehicle_id'=>$this-> vehicle_id,
            'Fname'=>$this-> Fname,
            'Lname'=>$this-> Lname,
            'email'=>$this-> email,
            'DriverForBusinessPurpose'=>$this-> DriverForBusinessPurpose,



        ];
    }
}
