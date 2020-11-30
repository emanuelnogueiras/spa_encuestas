<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"]);
Route::get("/survey", [HomeController::class, "survey"]);
Route::get("/results", [HomeController::class, "results"]);

