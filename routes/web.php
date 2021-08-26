<?php

use Source\Http\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\DashboardController;

$num = "([\d]+)";
$str = "([\w-]+)";

//Admin Routes
Route::get("dashboard",[DashboardController::class,"index"],"UserAuth");


//Web Routes
Route::get("login",[AuthController::class,"login"]);
Route::get("register",[AuthController::class,"register"]);

Route::get("",[HomeController::class,"index"]);