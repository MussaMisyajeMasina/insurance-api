<?php

namespace App\Http\Resources\Policy;

use Illuminate\Http\Resources\Json\JsonResource;

class PolicyResource extends JsonResource
{   /**
   * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id'=>$this-> id,
            'client_id'=>$this-> client_id,
            'PolicyNumber'=>$this-> PolicyNumber,
            'EffectiveDate'=>$this-> EffectiveDate,
            'ExpireDate'=>$this-> ExpireDate



        ];
    }
}
