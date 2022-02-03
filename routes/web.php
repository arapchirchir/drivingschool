<?php

use App\Http\Controllers\Graebens\BranchesController;
use App\Http\Controllers\Graebens\CoursesController;
use App\Http\Controllers\Graebens\PagesController;
use App\Http\Controllers\Graebens\RegistrationController;
use App\Http\Controllers\Graebens\SchoolInformationCOntroller;
use App\Http\Controllers\Graebens\StudentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PagesController::class, 'index'])->name('Default');
Route::get('/Courses', [PagesController::class, 'courses'])->name('Courses');
Route::get('/Assessment', [PagesController::class, 'driver_assessment'])->name('Assessment');
Route::get('/Contact', [PagesController::class, 'contact'])->name('Contact');
Route::get('/Branches', [PagesController::class, 'school_branches'])->name('Branches');
Route::post('/Fees/Download/{fees_structure}', [PagesController::class, 'feesStructureDownload'])->name('fees.structure.download');

// RegistrationController
Route::get('/OnlineRegistration', [PagesController::class, 'registration'])->name('OnlineRegistration');
Route::post('/OnlineRegistration', [RegistrationController::class, 'register'])->name('OnlineRegistration');

Route::post('/Feedback', [PagesController::class, 'feedback'])->name('feedback');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/Registration', [HomeController::class, 'student_registration'])->name('Registration');

Route::get('/GraebensCourses', [CoursesController::class, 'index'])->name('GraebensCourses');
Route::get('/GraebensCourses/{id}', [CoursesController::class, 'show'])->name('GraebensCourses.show');
Route::get('/GraebensBranches',[BranchesController::class,'index'])->name('GraebensBranches');
Route::post('/StoreCourse', [CoursesController::class, 'store'])->name('StoreCourse');
Route::post('/StoreBranch', [BranchesController::class, 'store'])->name('StoreBranch');
Route::get('/Branches/{id}', [BranchesController::class, 'show'])->name('Branches.show');

Route::get('/home/{student_id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('home/update/{student_id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('home/delete/{student_id}', [StudentController::class, 'destroy'])->name('student.delete');

Route::get('/Information', [SchoolInformationCOntroller::class, 'index'])->name('school.information');
Route::post('/Information/Fees', [SchoolInformationCOntroller::class, 'feesStructure'])->name('fees.structure');
Route::post('/Information/Fees/Download/{fees_structure}', [SchoolInformationCOntroller::class, 'feesStructureDownload'])->name('fees.structure.download');

