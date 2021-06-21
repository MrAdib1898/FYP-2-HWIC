<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

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

Route::get('/announcement',function(){
    return view('/fyp/announcement');
});

Route::get('/announcement','ApptController@announce'); 

Route::get('/createann','TestController@create'); 
Route::post('/createann','TestController@store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/secondmain', function () {
    return view('/fyp/secondmain');
});


Route::get('doctor_list','DoctorController@list'); 
Route::post('doctor_list','DoctorController@formSubmit');

Route::post('search','DoctorController@list'); 

Route::get('/abtus','ApptController@appMessage'); 

Route::get('/prescription','MediController@mediList'); 

Route::get('/trycard', function () {
    return view('/fyp/trycard');
});

Route::get('/history', function () {
    return view('/fyp/history');
});

Route::get('/myappointment','ContactController@show'); 
Route::post('/myappointment','ContactController@store'); 
Route::get('/prescription','InfoController@list'); 
Route::get('/infos','InfoController@list'); 
Route::get('/scrapper','ScraperController@scraper');