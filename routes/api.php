<?php

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

Route::get('index-blogs', [\App\Http\Controllers\Api\BlogsController::class , 'indexBlogs']);
Route::get('blog_list', [\App\Http\Controllers\Api\BlogsController::class , 'blogList']);
Route::get('blog_detail/{id}', [\App\Http\Controllers\Api\BlogsController::class , 'blogsDetail']);
Route::get('services', [\App\Http\Controllers\Api\BlogsController::class , 'services']);


Route::get('index-projects', [\App\Http\ Controllers\Api\ProjectController::class , 'indexProjects']);
Route::get('category', [\App\Http\Controllers\Api\ProjectController::class , 'category']);


Route::get('settings', [\App\Http\Controllers\Api\SettingController::class , 'index']);
Route::get('about/{id}', [\App\Http\Controllers\Api\SettingController::class , 'aboutDetail']);
