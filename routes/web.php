<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Short_linkController;
use App\Http\Controllers\RoleController;


Route::post("auth", [AuthController::class, 'auth'])->name('auth');
Route::get("home", [HomeController::class, 'index'])->name('home');//->middleware('checklogin');
Route::get("logout", [AuthController::class, 'logout']);

Route::resource("roles",RoleController::class);
Route::resource("short_links",Short_linkController::class);
Route::resource("users",UserController::class);

Route::get('/', function () {
    return view('index');
	})->name("login");


