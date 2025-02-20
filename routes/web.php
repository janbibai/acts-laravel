<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;


Route::get('/', [StudentsController::class, 'myWelcomeView']); //this line is use to display the view

Route::post('/create', [StudentsController::class, 'createNewStd'])->name('std.createNew');
// Route::get('/', function () {
//     return view('welcome');
;
