<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OurWorkController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Models\Blog;
use App\Http\Controllers\MetaDetails;


Route::get('/',[MetaDetails::class,'home'])->name('home');

Route::get('/about-us', [MetaDetails::class,'about'])->name('about');

Route::get('/our-services', function () {
    return view('services');
})->name('services');
<<<<<<< HEAD
Route::get('/our-services/digital-strategy-and-planning', function () {
=======

Route::get('/digital-strategy-and-planning', function () {
>>>>>>> 611aa1447d0fd107deded4e6800462dd7e39fcba
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

Route::get('/our-services', [MetaDetails::class, 'our_services'])->name('services');
Route::get('/our-services/{title?}', [ServicesController::class, 'show'])->name('services.view');

Route::get('/our-work', [MetaDetails::class, 'our_work'])->name('our-work');

Route::get('/blog', [MetaDetails::class, 'blog'])->name('blog');
Route::get('/blog/{title?}', [BlogController::class, 'show'])->name('blog.view');

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
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');
Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms.conditions');

Route::get('/portfolio-item/{work}', [OurWorkController::class, 'view_work'])->name('view.work');

//---------Admin Route---------//
Route::post('/gallery/ajax', [GalleryController::class, 'gallery_list_ajax'])->name('gallery_list_ajax');

Route::group(['prefix' => '/webeesite', 'middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Cagtegory
    Route::get('/category', [CategoryController::class, 'index'])->name('category.list');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    //Our Works

    Route::get('/our-works', [OurWorkController::class, 'index'])->name('our-work.list');
    Route::get('/our-work/create', [OurWorkController::class, 'create'])->name('our-work.create');
    Route::post('/our-work/store', [OurWorkController::class, 'store'])->name('our-work.store');
    Route::post('/our-work/remove_image', [OurWorkController::class, 'remove_image'])->name('our-work.remove_image');
    Route::get('/our-work/delete/{id}', [OurWorkController::class, 'destroy'])->name('our-work.delete');
    Route::get('/our-work/edit/{id}', [OurWorkController::class, 'edit'])->name('our-work.edit');
    Route::post('/our-work/update', [OurWorkController::class, 'update'])->name('our-work.update');

    //blogs

    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.list');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update', [BlogController::class, 'update'])->name('blog.update');

    ///Services

    Route::get('/services', [ServicesController::class, 'index'])->name('service.list');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('service.create');
    Route::post('/services/store', [ServicesController::class, 'store'])->name('service.store');
    Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])->name('service.edit');
    Route::post('/services/update', [ServicesController::class, 'update'])->name('service.update');
    Route::get('/services/delete/{id}', [ServicesController::class, 'destroy'])->name('service.delete');

    ///Gallery

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.list');
    Route::post('/gallery/save', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');

    // News

    Route::get('/news', [NewsController::class, 'index'])->name('news.list');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/news/update', [NewsController::class, 'update'])->name('news.update');

    //Meta 

    Route::get('/meta', [MetaDetails::class, 'index'])->name('meta.list');
    Route::get('/meta/create', [MetaDetails::class, 'create'])->name('meta.create');
    Route::post('/meta/store', [MetaDetails::class, 'store'])->name('meta.store');
    Route::get('/meta/edit/{id}', [MetaDetails::class, 'edit'])->name('meta.edit');
    Route::post('/meta/update', [MetaDetails::class, 'update'])->name('meta.update');
});

Route::group(['prefix' => '/webeesite', 'middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authentication');
});


Route::get('/{title?}', [BlogController::class, 'show'])->name('post.view');
