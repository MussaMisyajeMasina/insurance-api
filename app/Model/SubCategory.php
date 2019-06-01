<?php

namespace App\Model;

use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'SubCategoryName'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);

    }
}
