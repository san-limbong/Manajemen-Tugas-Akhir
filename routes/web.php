<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\FinalizationController;
use App\Http\Controllers\ProfileController;
//Admin
use App\Http\Controllers\AdminEnrollmentController;
use App\Http\Controllers\AdminTopicController;
use App\Http\Controllers\AdminGroupController;
use App\Http\Controllers\AdminMeetingController;
use App\Http\Controllers\AdminFinalizationController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminProfileViewController;





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
    return view('sesi.welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//Admin
Route::resource('/home', HomeController::class);
Route::get('/announcementpdf', [HomeController::class, 'exportpdf'])->middleware('is_admin');

Route::resource('/lecture', LectureController::class);
Route::resource('/seminar', SeminarController::class);
Route::resource('/evaluation', EvaluationController::class);

Route::resource('/adminenrollment', AdminEnrollmentController::class)->middleware('is_admin');
Route::resource('/admintopic', AdminTopicController::class)->middleware('is_admin');

Route::resource('/admingroup', AdminGroupController::class)->middleware('is_admin');
Route::get('/grouptapdf', [AdminGroupController::class, 'exportpdf'])->middleware('is_admin');

Route::resource('/adminmeeting', AdminMeetingController::class)->middleware('is_admin');
Route::resource('/adminfinalization', AdminFinalizationController::class)->middleware('is_admin');
Route::resource('/adminprofile', AdminProfileController::class)->middleware('is_admin');


//Mahasiswa
Route::resource('/enrollment', EnrollmentController::class)->middleware('is_mahasiswa');
Route::resource('/topic', TopicController::class)->middleware('is_mahasiswa');
Route::resource('/group', GroupController::class)->middleware('is_mahasiswa');
Route::resource('/meeting', MeetingController::class)->middleware('is_mahasiswa');

Route::resource('/finalization', FinalizationController::class)->middleware('is_mahasiswa');
Route::get('/download/{file}', [FinalizationController::class, 'download']);
Route::get('/view/{is}', [FinalizationController::class, 'view']);

Route::resource('/profile', ProfileController::class)->middleware('auth');


Route::get('/contoh', function () {
    return view('dashboard\contoh',[
        'title' => "Contoh"
    ]);
});