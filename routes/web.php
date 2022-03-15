<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToodoContorller;


Route::get('/',[ToodoContorller::class,"index"])->name("home");
Route::post('/',[ToodoContorller::class,"store"])->name("store");
// ---------------
// Route::get('/changeStatus', 'ToodoController@ChangeUserStatus')->name('/changeStatus');

// ----------
Route::post('/update/{id}',[ToodoContorller::class,"update"])->name("update");
Route::get('/edit/{id}',[ToodoContorller::class,"edit"])->name("edit");
Route::get('/delete/{id}',[ToodoContorller::class,"delete"])->name("delete");
