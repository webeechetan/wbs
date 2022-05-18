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
Route::get('/digital-strategy-and-planning', function () {
    return view('digital-strategy-and-planning');
})->name('digital-strategy-and-planning');   
Route::get('/creative-strategy-and-web-graphics-design', function () {
    return view('creative-strategy-and-web-graphics-design');
})->name('creative-strategy-and-web-graphics-design'); 
Route::get('/social-media-marketing', function () {
    return view('social-media-marketing');
})->name('social-media-marketing'); 
Route::get('/seo-and-search-engine-marketing', function () {
    return view('seo-and-search-engine-marketing');
})->name('seo-and-search-engine-marketing'); 
Route::get('/videos-gifs-and-content-marketing', function () {
    return view('videos-gifs-and-content-marketing');
})->name('videos-gifs-and-content-marketing'); 
Route::get('/website-design-and-development', function () {
    return view('website-design-and-development');
})->name('website-design-and-development'); 
Route::get('/email-marketing', function () {
    return view('email-marketing');
})->name('email-marketing'); 
Route::get('/web-analytics', function () {
    return view('web-analytics');
})->name('web-analytics'); 
Route::get('/media-planning-and-buying', function () {
    return view('media-planning-and-buying');
})->name('media-planning-and-buying'); 
Route::get('/shopify-website-development', function () {
    return view('shopify-website-development');
})->name('shopify-website-development'); 

Route::get('/our-work',[OurWorkController::class,'front_end_view'])->name('our-work');

Route::get('/blog', [BlogController::class,'front_end_view'])->name('blog');
Route::get('/blog/{title?}', [BlogController::class,'show'])->name('blog.view');

Route::get('/blog-inner', function () {
    return view('blog-inner');
})->name('blog-inner');   

Route::get('/get-in-touch', function () {
    return view('get-in-touch');
})->name('get-in-touch');

Route::get('/work-with-us', function () {
    return view('work-with-us');
})->name('work-with-us');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

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
