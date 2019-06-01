<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\Resource;

class CategoryCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //the collection returs all the things from the tables. for aspecific we use the resource controller
        return [
            'CategoryName'=>$this->CategoryName,
            'created_at'=>$this->created_at,
            'href'=>[
                'link'=> route('categories.show', $this->id)
            ]
        ];
    }
}
