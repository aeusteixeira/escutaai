<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AccountController,
    MainController,
    ArtistController,
    FanController,
    MemberController,
    SongController,
    CommentController,
    ShoppingController
};

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/', 'as' => 'main.'], function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
});


Route::group(['prefix' => '{account}', 'as' => 'account.'], function () {
    Route::get('/', [AccountController::class, 'index'])->name('index');
});

Route::group(['prefix' => '{account}/dashboard', 'as' => 'account.dashboard.'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
