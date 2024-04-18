<?php

use App\Livewire\AllProducts;
use App\Livewire\AllUsers;
use App\Livewire\Counter;
use App\Livewire\DropDown;
use App\Livewire\FileUpload;
use App\Livewire\LoadingState;
use App\Livewire\Polling;
use App\Livewire\RegisterUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/register', RegisterUser::class);
Route::get('/dropdown', DropDown::class);
Route::get('upload', FileUpload::class);
Route::get('users', AllUsers::class);
Route::get('products', AllProducts::class);
Route::get('poll', Polling::class);
Route::get('loading', LoadingState::class);
