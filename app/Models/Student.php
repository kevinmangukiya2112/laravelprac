<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    //
    use HasFactory;
    protected $table = "school_students";

    public function CheckFun(){
        echo "Check function from student model";
    }
}
