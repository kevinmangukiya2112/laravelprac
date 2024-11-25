<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbConnectionController extends Controller
{
    //
    public function DbConnect(){
        $users = DB::select('select * from users');
        return view('DbConnection',['users' => $users]);
    }

    public function students(){
        $studentModel = new \App\Models\Student;
        echo $studentModel->CheckFun();
        $students = \App\Models\Student::all();
        return view('student',['students' => $students]);
    }
}
