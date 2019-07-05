<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Http\Request;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Resources\SubCategoryResource;
use Symfony\Component\HttpFoundation\Response;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return SubCategoryResource::collection(SubCategory::all());

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        $subCategory=new subCategory;
        $subCategory->category_id=$request->category_id;
        $subCategory->subcategory_name=$request->subcategory_name;
        $subCategory->save();
        return response([
            'data'=>new SubCategoryResource($subCategory)
        ],Response::HTTP_CREATED);

        // $subCategory=new SubCategory($request->all());
        // $category->subcategories()->save($subCategory);

        //  return response([
        //     'data'=>new SubCategoryResource($subCategory)
        // ],Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //this will return subcategories
          return new SubCategoryResource($subCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategory->update($request->all());

        return response([
            'data'=>new SubCategoryResource($subCategory)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
