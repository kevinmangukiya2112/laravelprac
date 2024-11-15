<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NameRouteController;
use App\Http\Controllers\gropprefixController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/{name}', function($name) {
    return view('login',['name' => $name]);
});

Route::view('/home/{name}', 'login');

Route::get('/about/{name}', function($name) {
    echo $name;
    return view('about',['name' => $name]);
});

Route::redirect('/','/login');

Route::get('/about/{name}', function($name) {
    echo $name;
    return redirect('/login');
});

// controllers try and call controller from route and use parameters
Route::get('user',[UserController::class,'getUser']);
Route::get('username/{name}',[UserController::class,'getUserName']);

// nested view call in controller
Route::get('/adminlogin',[UserController::class,'adminLogin']);

Route::get('/kevin', function() {
    $name = 'kevin';
    $users = ['k','u','a','s','r'];
    return view('/kevin',['name' => $name,'users' => $users]);
});

// check view exists or not through controller.
Route::get('adminkevin',[UserController::class,'checkView']);

Route::view('userform','userform');
Route::post('adduser',[UserController::class,'addUser']);

Route::view('formhandle','formhandling');
Route::post('formhandling',[UserController::class,'formhandling']);

Route::view('urlcheck','urlcheck');

//named route using nmae functionality
Route::get('nameroute',[NameRouteController::class,'showName']);
Route::view('homes/nameroute','nameroute')->name('nr');

// Route::get('student/index',[gropprefixController::class,'index']);
// Route::get('student/second',[gropprefixController::class,'second']);
// Route::get('student/third',[gropprefixController::class,'third']);

Route::prefix('student')->group(function (){
    Route::get('/index',[gropprefixController::class,'index']);
    Route::get('/first',[gropprefixController::class,'first']);
    Route::get('/second',[gropprefixController::class,'second']);
});