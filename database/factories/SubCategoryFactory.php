<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Category;
use App\Model\SubCategory;
use Faker\Generator as Faker;

$factory->define(SubCategory::class, function (Faker $faker) {
    return [
        'category_id'=>function(){
            return Category::all()->random();

        },
        'SubCategoryName'=>$faker->word
    ];
});
