<?php

use App\Http\Controllers\UtamaController;
use App\Http\Controllers\RegistrasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [UtamaController::class, "home"])->name("home");
Route::get('/about', [UtamaController::class, "about"])->name("about");
Route::get('/services', [UtamaController::class, "services"])->name("services");
Route::get('/portfolio', [UtamaController::class, "portfolio"])->name("portfolio");
Route::get('/teams', [UtamaController::class, "teams"])->name("teams");
Route::get('/blog', [UtamaController::class, "blog"])->name("blog");
Route::get('/contact', [UtamaController::class, "contact"])->name("contact");

Route::get("/registrasi/form", [RegistrasiController::class, "registrasi"])->name("registrasi_form");
Route::post("/registrasi/proses", [RegistrasiController::class, "proses"])->name("registrasi_proses");

