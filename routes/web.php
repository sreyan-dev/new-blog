<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::resource('posts',CrudController::class);
