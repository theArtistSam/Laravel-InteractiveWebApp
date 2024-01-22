<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WallpaperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EditController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// All the routes of the app
Route::get("/", [HomeController::class,'getAPIData']);
Route::get("/profile", [WallpaperController::class,'profileView']);
Route::get('/edit', [EditController::class, 'displayWallpaper']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
// Route::get('/edit', function () {
//     return view('edit');
// });
// Route::get('/Home', function () {
//     return view('Home');
// });
Route::post('/login', [UserController::class,'login']);
Route::post('/', [HomeController::class, 'openImageClicked']);
Route::post('/Home', [HomeController::class, 'getSearchData']);

// Route::get('/Home', function () {
//     return redirect('/Home');
// });