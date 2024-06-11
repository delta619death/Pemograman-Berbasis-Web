<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get("/", "CobaController@home");
// Route::get('/profile',
// [PageController::class, 'profile']);




Route::group(['middleware' => ['guest']], function(){
    Route::get("/", [PageController::class, "login"])->name('login');
    Route::post("/login", [AuthController::class, "ceklogin"]);
});

Route::group(['middleware' => ['auth']], function(){
    Route::get("/logout", [AuthController::class, "ceklogout"]);
    Route::post("/updateuser", [PageController::class, "updateuser"]);
    Route::get("/user", [PageController::class, "formedituser"]);
    Route::get("/home", [PageController::class, "home"]);
    Route::get("/phone", [PageController::class, "phone"])->middleware('auth');
    Route::get("/about", [PageController::class, "about"]);
    Route::get("/faq", [PageController::class, "faq"]);
    Route::get("/phone/tambah", [PageController::class, "tambahhp"]);
    Route::post("/save", [PageController::class, "savephone"]);
    Route::get("/phone/edit-form/{idhp}", [PageController::class, "formeditphone"]);
    Route::put("/update/{idhp}", [PageController::class, "updatephone"]);
    Route::get("/delete/{idhp}", [PageController::class, "deletephone"]);
});