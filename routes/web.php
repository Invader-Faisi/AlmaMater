<?php

use App\Http\Controllers\AdminController;
use App\Livewire\Admin\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', Index::class)->name('dashboard');

