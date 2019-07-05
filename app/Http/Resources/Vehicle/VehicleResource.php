<?php

namespace App\Http\Resources\Vehicle;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /*policy_id
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this-> id,
            'policy_id'=>$this-> policy_id,
            'MakeYear'=>$this-> MakeYear,
            'color'=>$this-> color,
            'NumberPlate'=>$this-> NumberPlate,


        ];
    }
}
