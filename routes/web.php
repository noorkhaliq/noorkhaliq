<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


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

// Frontend Page Routing
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/front-projects', [FrontController::class, 'projects'])->name('front.projects');
Route::get('front-blogs', [FrontController::class, 'loadBlogs'])->name('front.blogs');
Route::get('front-blogs-list/{id}', [FrontController::class, 'blog'])->name('front.blog_list');
Route::get('about/{id}', [FrontController::class, 'about'])->name('front.about');



Route::get('/dash',[\App\Http\Controllers\IndexController::class,'dashboard'])->name('dash');


//Admin (users) Routing
Route::get('admin',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.index');
Route::get('admin-list',[\App\Http\Controllers\AdminController::class,'list'])->name('admin.list');
Route::get('create',[\App\Http\Controllers\AdminController::class,'create'])->name('admin.create');
Route::post('save',[\App\Http\Controllers\AdminController::class,'save'])->name('admin.save');
Route::delete('admin/delete/{id}',[\App\Http\Controllers\AdminController::class,'delete'])->name('admin.delete');
Route::get('admin/edit/{id}',[\App\Http\Controllers\AdminController::class,'edit'])->name('admin.edit');
Route::put('admin/edit/{id}',[\App\Http\Controllers\AdminController::class,'update'])->name('admin.update');



//Categories Routing
Route::get('categories',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('category-list',[\App\Http\Controllers\CategoryController::class,'list'])->name('category.list');
Route::get('category-create',[\App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::post('category-save',[\App\Http\Controllers\CategoryController::class,'save'])->name('category.save');
Route::get('category/edit/{id}',[\App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
Route::put('category/update/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::delete('category/delete/{id}',[\App\Http\Controllers\CategoryController::class,'delete'])->name('category.delete');



//Pages Routing
Route::get('pages',[\App\Http\Controllers\PageController::class,'index'])->name('pages.index');
Route::get('pages-list',[\App\Http\Controllers\PageController::class,'list'])->name('pages.list');
Route::get('pages-create',[\App\Http\Controllers\PageController::class,'create'])->name('pages.create');
Route::post('pages-save',[\App\Http\Controllers\PageController::class,'save'])->name('pages.save');
Route::delete('pages/delete/{id}',[\App\Http\Controllers\PageController::class,'delete'])->name('pages.delete');
Route::get('pages/edit/{id}',[\App\Http\Controllers\PageController::class,'edit'])->name('pages.edit');
Route::put('pages/update/{id}',[\App\Http\Controllers\PageController::class,'update'])->name('pages.update');



//Projects Routing
Route::get('projects',[\App\Http\Controllers\ProjectController::class,'index'])->name('projects.index');
Route::get('projects-list',[\App\Http\Controllers\ProjectController::class,'list'])->name('projects.list');
Route::delete('projects/delete/{id}',[\App\Http\Controllers\ProjectController::class,'delete'])->name('projects.delete');
Route::get('projects/edit/{id}',[\App\Http\Controllers\ProjectController::class,'edit'])->name('projects.edit');
Route::put('projects/update/{id}',[\App\Http\Controllers\ProjectController::class,'update'])->name('projects.update');
Route::get('projects-create',[\App\Http\Controllers\ProjectController::class,'create'])->name('projects.create');
Route::post('projects-save',[\App\Http\Controllers\ProjectController::class,'save'])->name('projects.save');


//Setting Routing
Route::get('settings',[\App\Http\Controllers\SettingsController::class,'index'])->name('settings.index');
Route::get('settings-list',[\App\Http\Controllers\SettingsController::class,'list'])->name('settings.list');
Route::delete('settings/delete/{id}',[\App\Http\Controllers\SettingsController::class,'delete'])->name('settings.delete');
Route::get('settings-create',[\App\Http\Controllers\SettingsController::class,'create'])->name('settings.create');
Route::post('settings-create',[\App\Http\Controllers\SettingsController::class,'save'])->name('settings.save');
Route::get('settings/edit/{id}',[\App\Http\Controllers\SettingsController::class,'edit'])->name('settings.edit');
Route::put('settings/update/{id}',[\App\Http\Controllers\SettingsController::class,'update'])->name('settings.update');


//Services (urls) Routing
Route::get('services',[\App\Http\Controllers\ServiceController::class,'index'])->name('services.index');
Route::get('services-list',[\App\Http\Controllers\ServiceController::class,'list'])->name('services.list');
Route::get('services-create',[\App\Http\Controllers\ServiceController::class,'create'])->name('services.create');
Route::post('services-save',[\App\Http\Controllers\ServiceController::class,'save'])->name('services.save');
Route::delete('services/delete/{id}',[\App\Http\Controllers\ServiceController::class,'delete'])->name('services.delete');
Route::get('services/edit/{id}',[\App\Http\Controllers\ServiceController::class,'edit'])->name('services.edit');
Route::put('services/update/{id}',[\App\Http\Controllers\ServiceController::class,'update'])->name('services.update');


//Blogs Routing
Route::get('blogs',[\App\Http\Controllers\BlogsController::class,'index'])->name('blogs.index');
Route::get('blogs-list',[\App\Http\Controllers\BlogsController::class,'list'])->name('blogs.list');
Route::delete('blogs/delete/{id}',[\App\Http\Controllers\BlogsController::class,'delete'])->name('blogs.delete');
Route::get('blogs-create',[\App\Http\Controllers\BlogsController::class,'create'])->name('blogs.create');
Route::post('blogs-save',[\App\Http\Controllers\BlogsController::class,'save'])->name('blogs.save');
Route::get('blogs/edit/{id}',[\App\Http\Controllers\BlogsController::class,'edit'])->name('blogs.edit');
Route::put('blogs/update/{id}',[\App\Http\Controllers\BlogsController::class,'update'])->name('blogs.update');
