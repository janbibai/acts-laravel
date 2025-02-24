<?php
//this is where you call everything to function in the website

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;


Route::get('/', [StudentsController::class, 'myWelcomeView']); //this line is use to display the view

Route::post('/create', [StudentsController::class, 'createNewStd'])->name('std.createNew'); //para ni siya sa pag add og students

Route::delete('/delete-student/{id}', [StudentsController::class, 'destroy'])->name('student.destroy');


Route::get('/edit-student/{id}', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/update-student/{id}', [StudentsController::class, 'update'])->name('students.update');
