<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Crud\IndexComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', IndexComponent::class)->name('students');