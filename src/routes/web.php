<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
    ['prefix' => 'blog','as' => 'blog/','namespace' => 'Blog', ],

    function(){
        Route::get('/post/{post_id}', "Blog\ExamplePostController@show");
    }
);

Route::get('/hello/{name}', function ($name) {
    return view("hello-name", [
        "name" => $name,
    ]);
});

