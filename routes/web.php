<?php
//this is where you call everything to function in the website
//test bc naboang ako git
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
=======
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Middleware\AuthCheck;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'index'])->name(('auth.index'));
//Route::post('/user-login', [StudentsController::class, 'login'])->name(('auth.login'))
Route::post('/user-login', [AuthController::class, 'login'])->name('auth.login');
>>>>>>> 1cebb0a (added a login function)


Route::get('/', [StudentsController::class, 'myWelcomeView']); //this line is use to display the view

Route::post('/create', [StudentsController::class, 'createNewStd'])->name('std.createNew'); //para ni siya sa pag add og students

Route::delete('/delete-student/{id}', [StudentsController::class, 'destroy'])->name('student.destroy');


Route::get('/edit-student/{id}', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/update-student/{id}', [StudentsController::class, 'update'])->name('students.update');
