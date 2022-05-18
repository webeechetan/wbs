<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OurWorkController;
use App\Http\Controllers\BlogController;

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
//     return view('layouts.app');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/our-services', function () {
    return view('services');
})->name('services');

Route::get('/our-work',[OurWorkController::class,'front_end_view'])->name('our-work');

Route::get('/blog', [BlogController::class,'front_end_view'])->name('blog');

Route::get('/blog-inner', function () {
    return view('blog-inner');
})->name('blog-inner');  

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');  

Route::get('/get-in-touch', function () {
    return view('get-in-touch');
})->name('get-in-touch');

Route::get('/work-with-us', function () {
    return view('work-with-us');
})->name('work-with-us');

Route::get('/portfolio-item/{work}',[OurWorkController::class,'view_work'])->name('view.work');

//---------Admin Route---------//

Route::group(['prefix' =>'/webeesite','middleware' => ['auth']],function () {
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    // Cagtegory
    Route::get('/category',[CategoryController::class,'index'])->name('category.list');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::post('/category/update',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

    //Our Works

    Route::get('/our-works',[OurWorkController::class,'index'])->name('our-work.list');
    Route::get('/our-work/create',[OurWorkController::class,'create'])->name('our-work.create');
    Route::post('/our-work/store',[OurWorkController::class,'store'])->name('our-work.store');
    Route::post('/our-work/remove_image',[OurWorkController::class,'remove_image'])->name('our-work.remove_image');
    Route::get('/our-work/delete/{id}',[OurWorkController::class,'destroy'])->name('our-work.delete');
    Route::get('/our-work/edit/{id}',[OurWorkController::class,'edit'])->name('our-work.edit');
    Route::post('/our-work/update',[OurWorkController::class,'update'])->name('our-work.update');

    //blogs

    Route::get('/blogs',[BlogController::class,'index'])->name('blog.list');
    Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blog/delete/{id}',[BlogController::class,'destroy'])->name('blog.delete');
    Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/blog/update',[BlogController::class,'update'])->name('blog.update');

});

Route::group(['prefix' =>'/webeesite','middleware' => ['guest']],function () {
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'authenticate'])->name('authentication');
});
