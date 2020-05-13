<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');})->name('welcome');
Route::get('/hello', function () {
    return view('hello',[]);})->name('hello');
Route::get('/contakts', function () {
    return view('contakts',[]);})->name('contakts');
Route::post('/contakts/submit', 'contaktsController@submit')->name('contakts-form');
Route::get('/contakts/all', 'contaktsController@allData')->name('contakts-data');
Route::get('/contakts/all/{id}', 'contaktsController@showOneMessage')->name('contakts-data-one');
Route::get('/contakts/all/{id}/update', 'contaktsController@updateMessage')->name('contakts-update');
Route::post('/contakts/all/{id}/update', 'contaktsController@updateMessageSubmit')->name('contakts-update-submit');
Route::get('/contakts/all/{id}/delete', 'contaktsController@deleteMessage')->name('contakts-delete');





?>
