<?php

namespace App\Model;

use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id','subcategory_name'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);

    }
}
