<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/categories', 'CategoryController');

// Route::group(['prefix' => 'categories'], function () {
//     Route::apiResource('/{category}/subcategories','SubCategoryController');
//});
Route::apiResource('/policies', 'PolicyController');
Route::apiResource('/clients', 'ClientController');
Route::apiResource('/drivers', 'DriverController');
Route::apiResource('/vehicles', 'VehicleController');
Route::apiResource('/sub_categories', 'SubCategoryController');
Route::apiResource('/users', 'UserController');

Route::group([


    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');




});

//new

Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@authenticate');
    Route::get('open', 'DataController@open');
    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('user', 'UserController@getAuthenticatedUser');
        Route::get('closed', 'DataController@closed');
    });
