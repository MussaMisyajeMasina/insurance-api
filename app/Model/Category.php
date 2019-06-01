<?php

namespace App\Model;

use App\Model\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'CategoryName'
    ];

    public function subcategories(){
        return $this->hasMany(SubCategory::class);
    }
}
