<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{
    function getUser(){
        return view('login');  // return view or call view from controller
        // return "kevin Mangukiya";
    }

    function getUserName($name){
        // return "Hello ". $name;
        return view('username',['username' => $name]);
    }

    function adminLogin(){
        return view('admin.login'); // return nested view or call view from controller
    }

    function checkView(){
        if(View::exists('admin.kevin')){
            return view('admin.kevin');
        } else {
            return "view not found";
        }
    }
}
