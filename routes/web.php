<?php

use App\Livewire\Counter;
use App\Livewire\DropDown;
use App\Livewire\RegisterUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/register', RegisterUser::class);
Route::get('/dropdown', DropDown::class);
