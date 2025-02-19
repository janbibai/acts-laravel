<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function myWelcomeView()
    {
        $students = Students::all();
        return view('welcome', compact('students'));
    }
}
