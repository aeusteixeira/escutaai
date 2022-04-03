<?php

use App\Http\Controllers\{
    UserController,
    AccountController,
    AlbumController,
    ArtistController,
    CategoryController,
    CommentController,
    ProductController,
    ShoppingController,
    SongController,
    TypeOfLikesController,
    TypeOfMembersController,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'users' => UserController::class,
    'accounts' => AccountController::class,
    'albums' => AlbumController::class,
    'artists' => ArtistController::class,
    'categorys' => CategoryController::class,
    'comments' => CommentController::class,
    'products' => ProductController::class,
    'shoppings' => ShoppingController::class,
    'songs' => SongController::class,
    'type-of-likes' => TypeOfLikesController::class,
    'type-of-members' => TypeOfMembersController::class,
]);
