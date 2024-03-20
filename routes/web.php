<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Crud\IndexComponent;
use App\Livewire\Crud\AddStudentComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', IndexComponent::class)->name('students');
Route::get('add-students', AddStudentComponent::class)->name('add-students');