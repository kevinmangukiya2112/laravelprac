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

    function addUser(Request $request){
        echo "we are in controller from form congrats";
        return $request->username;
    }

    function formhandling(Request $request){
        $request->validate([
            'skill' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'age' => 'required',
            'email' => 'required | email | min:7 | max:30',
        ],[
            'email.email' => 'please add valid email address',
            'skill.required' => 'you should have at least one skill',
            'gender.required' => 'please select your gender',
            'city.required' => 'please select your city',
            'age.required' => 'please enter your age',
            'email.min' => 'email should be at least 7 characters',
            'email.max' => 'email should not exceed 30 characters',
        ]);
        foreach($request->skill as $skill){
            echo $skill."<br>";
        }
    }
}
