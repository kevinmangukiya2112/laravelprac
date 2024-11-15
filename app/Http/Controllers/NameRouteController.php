<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameRouteController extends Controller
{
    //
    public function showName() {
        return to_route('nr');
    }
}
