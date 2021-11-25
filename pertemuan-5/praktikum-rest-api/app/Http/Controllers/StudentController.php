<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        $data = [
            "message" => "Get All Student",
            "data" => $students
        ];
        return response()->json($data, 200);
        // echo json_encode($students);
    }
}
