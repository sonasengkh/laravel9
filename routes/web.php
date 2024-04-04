<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/ctrl',[HomeController::class, 'index']);
Route::get('/post',PostController::class);
Route::get('/posts', function(){
    return view('page.posts');
});

Route::get('/', function () {
    return view('welcome',['name'=> 'Youtube']); 
});

Route::get('/page',function(){
    return view('page.page1');
});

Route::get("/home", function(){
    echo 1 + 1;
});
// Route::match(['get', 'post'], '/home2', function () {
//     echo "match";
// });

