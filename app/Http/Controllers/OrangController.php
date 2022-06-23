<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class OrangController extends Controller
{
    public function index()
    {
        $data = Student::paginate(5);
        return view('student', compact('data'));
    }
}
