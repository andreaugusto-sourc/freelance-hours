<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// route::view('/', 'projects.index')->name('projects.index');
// route::view('/projects/{id}', 'projects.show')->name('projects.show');

route::get('/',[ProjectController::class, 'index'])->name('projects.index');
route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');