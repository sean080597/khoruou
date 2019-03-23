<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// use App\ruou;
Auth::routes();
// Route::get('/try', function(){
//     return ruou::find('1')->NhaSanXuat->TenNSX;
// });
Route::get('/getLoggedUser', function(){
    return response()->json(auth()->user());
})->middleware('auth');
Route::get('{path}', "HomeController@index")->where( 'path', '([A-z\d-\/_.]+)?' );
