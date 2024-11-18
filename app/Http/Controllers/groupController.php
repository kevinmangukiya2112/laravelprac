<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupController extends Controller
{
    //

    public function group() {
        return view('groupcontroller');
    }

    public function groupadd() {
        return view('groupcontroller');
    }

    public function groupdelete() {
        return view('groupcontroller');
    }

    public function groupabout($name) {
        return $name;
    }
}
