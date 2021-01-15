<?php
use \App\Http\Controllers\UserController;
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
Route::get('/danh-sach-nguoi-dung','UserController@findAll');
Route::get('/danh-sach-lop-hoc','ClassController@findAll');
Route::get('/danh-sach-cau-hoi/{id}','QuestionnaireController@findAll');
Route::post('/check-answer/{id}','QuestionnaireController@checkAnswer');
Route::get('/list-lession','LessionController@findAll');
Route::get('/admin','AdminController@index');

//admin
Route::get('api/all-lession','LessionController@findAllLession');
Route::get('api/question','QuestionnaireController@show');
Route::get('/api/question/detail/{question_id}','QuestionnaireController@findOneDetail');
Route::get('/api/question/edit/{question_id}','QuestionnaireController@edit');
Route::get('/api/question/delete/{question_id}','QuestionnaireController@delete');


