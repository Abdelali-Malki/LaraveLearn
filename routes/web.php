<?php

use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('select',[MyController::class,'select']);

Route::get('/index',[MyController::class,'add']);

Route::get('/insert',[MyController::class,'insert']);

//********************* Routing Basic ******************************

// route::get('/index', function(){
//     return "test test test";
// }
// );

//********************* Routing Parametre ******************************

// Route::get('/index/{id}',function($id){
//     return "Solicode .$id";
// });

// //********************* Routing Parametre ******************************

// Route::get('/index/{id}/{name}',function($id,$name){
//     return "solicode .$id .name.$name";
// });

// Route::get('/request', function () {
//     return view('request');
// });

// Route::any('/request', function (Request $request) {
//     $name = $request->input("name");
//     return $name;
// });