<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    /* static function getAllStudent(){
        // query select SQL
        $student = DB::select('select * from students');
        return $student;
    } */
}
