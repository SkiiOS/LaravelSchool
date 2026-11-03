<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/admin/dashboard', [DashboardController::class, 'admindashboard'])->name('Admin.dashboard');
Route::get('/admin/about', [AboutController::class, 'adminabout'])->name('Admin.about');
Route::get('/admin/Student', [StudentController::class, 'index'])->name('Admin.Student.index');
Route::get('/admin/Classroom', [ClassroomController::class, 'index'])->name('Admin.Classroom.classroom');
Route::get('/admin/Teacher', [TeacherController::class, 'index'])->name('Admin.Teacher.index');
Route::get('/admin/Subject', [SubjectController::class, 'index'])->name('Admin.Subject.index');
