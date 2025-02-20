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

    public function createNewStd(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'age' => 'required|numeric',
            'gender' => 'required|max:6',
            'address' => 'required'
        ]);
        
        $addNew = new Students();
        $addNew->name = $request->name;
        $addNew->age = $request->age;
        $addNew->gender = $request->gender;
        $addNew->address = $request->address;
        $addNew->save();

        return back();
    }
}
