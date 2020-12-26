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
    return redirect('login');
});

Auth::routes();
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('personalInfo', 'App\Http\Controllers\personalController')->name('*', 'personalInfo');
Route::resource('jobInfo', 'App\Http\Controllers\JobInfoController')->name('*', 'jobInfo')->middleware('auth');
Route::resource('contactInfo', 'App\Http\Controllers\ContactInfoController')->name('*', 'contactInfo')->middleware('auth');
Route::resource('information', 'App\Http\Controllers\InformationController')->name('*', 'information')->middleware('auth');
Route::resource('commitment', 'App\Http\Controllers\CommitmentsController')->name('*', 'commitment')->middleware('auth');
Route::resource('location', 'App\Http\Controllers\LocationInfoController')->name('*', 'location')->middleware('auth');
Route::resource('bank', 'App\Http\Controllers\BankController')->name('*', 'bank')->middleware('auth');
//login Committee form
Route::get('committee', 'App\Http\Controllers\MemberController@index')->name('committee.index');
//Check Committee number
Route::post('committee/check', 'App\Http\Controllers\MemberController@check')->name('committee.check');
//show all information
Route::get('committee/{id}/show', 'App\Http\Controllers\MemberController@show')->name('committee.show');
// Route::post('export-data', 'App\Http\Controllers\MemberController@excel');
//login Committee form
Route::get('committee', 'App\Http\Controllers\MemberController@index')->name('committee.index');
//Check Committee number
Route::post('committee/check', 'App\Http\Controllers\MemberController@check')->name('committee.check');
// 
Route::get('initialstudy', 'App\Http\Controllers\InitialStudyController@index')->name('index')->middleware('auth');
Route::post('check_initialstudy', 'App\Http\Controllers\InitialStudyController@check_initialstudy')->name('check_initialstudy')->middleware('auth');
//check_location form
Route::get('checkLocation', 'App\Http\Controllers\InitialStudyController@checkLocation')->name('checkLocation')->middleware('auth');
//check_location function
Route::post('check_Location', 'App\Http\Controllers\InitialStudyController@check_Location')->name('check_Location')->middleware('auth');
//Detect location
Route::get('detect_location', 'App\Http\Controllers\DetectlocationController@index')->name('detect_location');
//Attachments file 
Route::get('form','App\Http\Controllers\AttachmentsController@create')->name('form');
Route::post('form','App\Http\Controllers\AttachmentsController@store');
//OpenController 
Route::get('openfile','App\Http\Controllers\OpenController@create')->name('openfile');
Route::post('openfile','App\Http\Controllers\OpenController@store');
//login Committee form
Route::get('committee', 'App\Http\Controllers\MemberController@index')->name('committee.index');
//Check Committee number
Route::post('committee/check', 'App\Http\Controllers\MemberController@check')->name('committee.check');
//dashboard
Route::get('committee/dashboard', 'App\Http\Controllers\MemberController@dashboard')->name('committee.dashboard');
//Committee 
Route::get('opinion', 'App\Http\Controllers\MemberOpinionController@create')->name('opinion');
Route::post('opinion','App\Http\Controllers\MemberOpinionController@store');
//Researcher
Route::get('researcher', 'App\Http\Controllers\ResearcherController@create')->name('researcher');
Route::post('researcher','App\Http\Controllers\ResearcherController@store');
Route::get('researcher/{id}/show', 'App\Http\Controllers\ResearcherController@show')->name('researcher.show');
//profile
Route::resource('profile', 'App\Http\Controllers\ProfileController')->name('*', 'profile')->middleware('auth');
//Non Saudi 
Route::get('nonsaudi', 'App\Http\Controllers\NonSaudiController@create')->name('nonsaudi');
Route::post('nonsaudi','App\Http\Controllers\NonSaudiController@store');
//attach non Saudi
Route::get('attach/create', 'App\Http\Controllers\AttachController@create')->name('attach.create');
Route::post('attach/store','App\Http\Controllers\AttachController@store');
//Search
Route::get('search', 'App\Http\Controllers\MemberController@search')->name('search');