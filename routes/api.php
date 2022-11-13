<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController as APIController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\EnrollmentController;
use App\Http\Controllers\API\TopicController;
use App\Http\Controllers\API\GroupController;
use App\Http\Controllers\API\LectureController;
use App\Http\Controllers\API\SeminarController;
use App\Http\Controllers\API\MeetingController;
use App\Http\Controllers\API\EvaluationController;
use App\Http\Controllers\API\FinalizationController;
use App\Http\Controllers\API\ProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//1// Home
Route::get('announcement', [HomeController::class, 'index']);
Route::get('announcement/{id}', [HomeController::class, 'show']);
Route::post('announcement/develop', [HomeController::class, 'store']);
Route::put('/announcement/{id}/manage', [HomeController::class, 'update']);
Route::delete('/announcement/{id}', [HomeController::class, 'destroy']);


//2// Enrollment
Route::get('enrollment', [EnrollmentController::class, 'index']);
Route::get('enrollment/{id}', [EnrollmentController::class, 'show']);
Route::post('enrollment/develop', [EnrollmentController::class, 'store']);
Route::put('/enrollment/{id}/manage', [EnrollmentController::class, 'update']);
Route::delete('/enrollment/{id}', [EnrollmentController::class, 'destroy']);

//3// Topic
Route::get('topic', [TopicController::class, 'index']);
Route::get('topic/{id}', [TopicController::class, 'show']);
Route::post('topic/develop', [TopicController::class, 'store']);
Route::put('/topic/{id}/manage', [TopicController::class, 'update']);
Route::delete('/topic/{id}', [TopicController::class, 'destroy']);

//4// Group
Route::get('group', [GroupController::class, 'index']);
Route::get('group/{id}', [GroupController::class, 'show']);
Route::post('group/develop', [GroupController::class, 'store']);
Route::put('/group/{id}/manage', [GroupController::class, 'update']);
Route::delete('/group/{id}', [GroupController::class, 'destroy']);

//5//Lecture
Route::get('lecture', [LectureController::class, 'index']);
Route::get('lecture/{id}', [LectureController::class, 'show']);
Route::post('lecture/develop', [LectureController::class, 'store']);
Route::put('/lecture/{id}/manage', [LectureController::class, 'update']);
Route::delete('/lecture/{id}', [LectureController::class, 'destroy']);

//6//Seminar
Route::get('seminar', [SeminarController::class, 'index']);
Route::get('seminar/{id}', [SeminarController::class, 'show']);
Route::post('seminar/develop', [SeminarController::class, 'store']);
Route::put('/seminar/{id}/manage', [SeminarController::class, 'update']);
Route::delete('/seminar/{id}', [SeminarController::class, 'destroy']);

//7// Meeting
Route::get('meeting', [MeetingController::class, 'index']);
Route::get('meeting/{id}', [MeetingController::class, 'show']);
Route::post('meeting/develop', [MeetingController::class, 'store']);
Route::put('/meeting/{id}/manage', [MeetingController::class, 'update']);
Route::delete('/meeting/{id}', [MeetingController::class, 'destroy']);

//8//Evaluation
Route::get('evaluation', [EvaluationController::class, 'index']);
Route::get('evaluation/{id}', [EvaluationController::class, 'show']);
Route::post('evaluation/develop', [EvaluationController::class, 'store']);
Route::put('/evaluation/{id}/manage', [EvaluationController::class, 'update']);
Route::delete('/evaluation/{id}', [EvaluationController::class, 'destroy']);

//9// Finalization
Route::get('finalization', [FinalizationController::class, 'index']);
Route::get('finalization/{id}', [FinalizationController::class, 'show']);
Route::post('finalization/develop', [FinalizationController::class, 'store']);
Route::put('/finalization/{id}/manage', [FinalizationController::class, 'update']);
Route::delete('/finalization/{id}', [FinalizationController::class, 'destroy']);

//10// Login & Register
Route::post('login', 'App\Http\Controllers\API\AuthController@login');
Route::post('register', 'App\Http\Controllers\API\AuthController@register');

//11// Profile
Route::get('profile', [ProfileController::class, 'index']);
Route::get('profile/{id}', [ProfileController::class, 'show']);
Route::put('/profile/{id}/manage', [ProfileController::class, 'update']);
Route::delete('/profile/{id}', [ProfileController::class, 'destroy']);

// Route::resource('/home', HomeController::class);
// Route::resource('/enrollment', EnrollmentController::class);
// Route::resource('/topic', TopicController::class);
// Route::resource('/group', GroupController::class);
// Route::resource('/lecture', LectureController::class);
// Route::resource('/seminar', SeminarController::class);
// Route::resource('/meeting', MeetingController::class);
// Route::resource('/evaluation', EvaluationController::class);
// Route::resource('/finalization', FinalizationController::class);