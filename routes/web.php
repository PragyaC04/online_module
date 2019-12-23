<?php

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

Route::get('/view/qualedit', function () {
    return view('qualedit');
});

/* Route::get('/view', function () {
    return view('viewtest');
}); 
Route::post('/qualitative' , [ 'as' => 'qualitative.add' , 'uses' => 'QualitativeController@store']);
*/

Route::get('/addt/{c}', 'QualitativeController@add');
Route::get('/test', 'QualitativeController@index');
Route::get('/view/{sid}', 'QualitativeController@display');
Route::get('/{sid}/qualedit/{qid}', 'QualitativeController@edit')->name('qualedit');
 Route::post('/qualitative/{c}' , [ 'as' => 'qualitative.add' , 'uses' => 'QualitativeController@store']);

//Route::get('/qedit/{sid}/{qid}', [ 'as' => 'qualitative.edit' , 'uses' => 'QualitativeController@edit']);