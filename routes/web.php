<?php

use Illuminate\Support\Facades\Route;

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
    return view('userSide.index');
});

Route::view('about','userSide.about');
Route::get('/students/dashboard',[\App\Http\Controllers\userDashboard::class,'index']);
Route::get('students/reading/report/{id}',[\App\Http\Controllers\userDashboard::class,'read_report']);
Route::get('student/writing/topic/report/{id}',[\App\Http\Controllers\userDashboard::class,'writing_topic_report']);
Route::get('student/writing/grammer/report/{id}',[\App\Http\Controllers\userDashboard::class,'writing_grammer_report']);
Route::view('contact','userSide.contact');
Route::view('login/type','userSide.login_type');

Route::get('readings',[\App\Http\Controllers\userReading::class,'index']);
Route::get('readings/{id}',[\App\Http\Controllers\userReading::class,'cat_index']);
Route::get('readnow/{id}',[\App\Http\Controllers\userReading::class,'readNow']);
Route::get('readnow/step2/{id}',[\App\Http\Controllers\userReading::class,'readNow2']);
Route::get('start/story/{id}',[\App\Http\Controllers\userReading::class,'start_story']);
Route::get('start/story/questions/{id}',[\App\Http\Controllers\userReading::class,'start_question']);
Route::post('story/save/{id}',[\App\Http\Controllers\userReading::class,'story_save']);
Route::view('vocabulary','userSide.vocabulary.vocabulary');
Route::view('vocabulary/step2','userSide.vocabulary.vocabulary2');
Route::view('vocabulary/step3','userSide.vocabulary.vocabulary3');
Route::view('vocabulary/step4','userSide.vocabulary.vocabulary4');
Route::view('vocabulary/step5','userSide.vocabulary.vocabulary5');



Route::view('writing','userSide.writing.writing');
Route::get('writing/topics',[\App\Http\Controllers\WritingTopcController::class,'topic_index']);
Route::get('writing/grammer',[\App\Http\Controllers\writingController::class,'index']);
Route::get('writing/grammer/submit',[\App\Http\Controllers\writingController::class,'grammer_submit']);
Route::get('writing/topics/{id}',[\App\Http\Controllers\WritingTopcController::class,'topic_detail']);
Route::post('writing/topics/submit/{id}',[\App\Http\Controllers\WritingTopcController::class,'topic_submit']);



Route::prefix('/teacher')->middleware(['auth','teacher'])->group(function () {
Route::get('/Students',[\App\Http\Controllers\teacher::class,'student']);
Route::get('student/report/{id}',[\App\Http\Controllers\teacher::class,'report']);
Route::get('student/report/reading/{id}',[\App\Http\Controllers\teacher::class,'reading_report']);
Route::get('student/writing/topic/report/{id}',[\App\Http\Controllers\teacher::class,'writing_topic_report']);
Route::post('student/writing/topic/report/submit/{id}',[\App\Http\Controllers\teacher::class,'writing_topic_report_submit']);
Route::view('student/report/vocabulary','teacher.report_vocabulary');
});


Route::get('/logout_user',[\App\Http\Controllers\HomeController::class,'logout']);

Route::prefix('/admin')->middleware(['auth','admin'])->group(function (){
    Route::view('home','admin.home');
    Route::get('students',[\App\Http\Controllers\AdminController::class,'index']);
    Route::post('students/teacher/update',[\App\Http\Controllers\AdminController::class,'teacher_update']);
    Route::get('students/del/{id}',[\App\Http\Controllers\AdminController::class,'stu_del']);
    Route::get('students/edit/{id}',[\App\Http\Controllers\AdminController::class,'stu_edit']);
    Route::post('students/update/{id}',[\App\Http\Controllers\AdminController::class,'stu_update']);
    Route::view('/students/report','admin.students.report');

    Route::view('teacher/add','admin.teacher.add');
    Route::get('teacher',[\App\Http\Controllers\AdminController::class,'teacher_index']);
    Route::post('teacher/store',[\App\Http\Controllers\AdminController::class,'teacher_store']);
    Route::get('teacher/del/{id}',[\App\Http\Controllers\AdminController::class,'teacher_del']);
    Route::get('teacher/edit/{id}',[\App\Http\Controllers\AdminController::class,'teacher_edit']);
    Route::post('teacher/update/{id}',[\App\Http\Controllers\AdminController::class,'teacherPro_update']);



    Route::get('readings/category',[\App\Http\Controllers\CategoryController::class,'index']);
    Route::post('readings/category/save',[\App\Http\Controllers\CategoryController::class,'save']);
    Route::get('readings/category/del/{id}',[\App\Http\Controllers\CategoryController::class,'del']);
    Route::post('readings/category/update/{id}',[\App\Http\Controllers\CategoryController::class,'update']);
    Route::get('readings/story',[\App\Http\Controllers\AdminController::class,'story_index']);
    Route::get('readings/story/add',[\App\Http\Controllers\AdminController::class,'add_story']);
    Route::post('readings/story/save',[\App\Http\Controllers\AdminController::class,'save_story']);
    Route::get('readings/story/del/{id}',[\App\Http\Controllers\AdminController::class,'story_del']);
    Route::get('readings/story/edit/{id}',[\App\Http\Controllers\AdminController::class,'story_edit']);
    Route::post('readings/story/update/{id}',[\App\Http\Controllers\AdminController::class,'story_update']);

    Route::view('/vocabulary/words','admin.vocabulary.words');
    Route::view('/vocabulary/add/question','admin.vocabulary.question');

    Route::get('/writing/topics',[\App\Http\Controllers\WritingTopcController::class,'index']);
    Route::get('/writing/topics/del/{id}',[\App\Http\Controllers\WritingTopcController::class,'topic_del']);
    Route::post('/writing/topics/update/{id}',[\App\Http\Controllers\WritingTopcController::class,'topic_update']);
    Route::post('/writing/topics/save',[\App\Http\Controllers\WritingTopcController::class,'save']);
    Route::get('/writing/grammer',[\App\Http\Controllers\WritingGrammerController::class,'index']);
    Route::get('/writing/grammer/create',[\App\Http\Controllers\WritingGrammerController::class,'view']);
    Route::post('/writing/grammer/save',[\App\Http\Controllers\WritingGrammerController::class,'save']);
    Route::get('/writing/grammer/edit/{id}',[\App\Http\Controllers\WritingGrammerController::class,'edit']);
    Route::get('/writing/grammer/del/{id}',[\App\Http\Controllers\WritingGrammerController::class,'del']);
    Route::post('/writing/grammer/update/{id}',[\App\Http\Controllers\WritingGrammerController::class,'update']);




});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
