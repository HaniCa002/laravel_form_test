<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('adminlte.css');

});
Route::get('/admin/students', function () {
    return view('create-student');
});

Route::get('/admin/teachers', function () {
    return view('teachers');
});
Route::resource('students', StudentController::class);

