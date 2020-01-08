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

//List articles
Route::get('carticles', 'carticlecontroller@index');

//List single article
Route::get('carticle/{id}', 'carticlecontroller@show');

//create new article
Route::post('carticle', 'carticlecontroller@store');

//update article
Route::put('carticles', 'carticlecontroller@store');

//delete article
Route::delete('carticle/{id}', 'carticlecontroller@destroy');





