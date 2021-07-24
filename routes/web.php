<?php

use Source\Http\Route;

$num = "([\d]+)";
$str = "([\w-]+)";

Route::get("dashboard","DashboardController@index");


Route::get("login","AuthController@login");
Route::get("register","AuthController@register");

Route::get("","HomeController@index");