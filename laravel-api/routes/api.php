<?php

use App\Post;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

////Custom apis
//Route::get("/posts",
//function (){
//    $post = Post::create([
//        "title"=>"my first post",
//        "slug"=>"my-first-post"
//    ]);
//    return $post;
//});
//
//
////create
//Route::post("/post");
//
////update
//Route::put("/post");
//
////delete
//Route::delete("/post");
//will generate all routes
//Route::prefix("v1") ->group(function(){
//    Route::apiResource("posts","PostController");
//
//});
Route::post("user-signup", "UserController@userSignUp");

Route::post("user-login", "UserController@userLogin");

Route::get("user/{email}", "UserController@userDetail");
