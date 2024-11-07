<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login', function() {
    return view('login');
});

Route::view('/home', 'login');

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
