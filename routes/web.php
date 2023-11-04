<?php

use App\Livewire\Admin\AdminDasboard;
use App\Livewire\Admin\AdminEnrollment;
use App\Livewire\Admin\AdminNewStudent;
use App\Livewire\Admin\AdminViewStudent;
use App\Livewire\Admin\ViewStudent;
use App\Livewire\StudentEnrollment;
use App\Livewire\StudentGrade;
use App\Livewire\StudentHome;
use App\Livewire\StudentPersonalInfo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//student route
// Route::get('/', StudentHome::class);
// Route::get('/grade', StudentGrade::class);
// Route::get('/info', StudentPersonalInfo::class);
// Route::get('/enroll', StudentEnrollment::class);



//admin route

Route::get('/', AdminDasboard::class)->name('admin-announcement');
Route::get('/student/create', AdminNewStudent::class)->name('admin-student');
Route::get('/student/enroll', AdminViewStudent::class)->name('admin-view-student');
Route::get('/student/enroll/{id}', AdminEnrollment::class)->where(['id' => '[0-9]+'])->name('admin-enrollment');

