<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;

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

Route::get('/', function () {
    return view('frontend.index');
})->name('home');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Admin All route
Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(Function(){
        Route::get('/admin/logout','destroy')->name('admin.logout');

        Route::get('/admin/profile','Profile')->name('admin.profile');

        Route::get('/edit/profile','EditProfile')->name('edit.profile');

        Route::post('/store/profile','StoreProfile')->name('store.profile');

        Route::get('/change/password','ChangePassword')->name('change.password');

        Route::post('/update/password','UpdatePassword')->name('update.password');
    });
});


// Home Slide All route
Route::controller(HomeSliderController::class)->group(Function(){
    Route::get('/home/slide','HomeSlider')->name('home.slide');
    Route::post('/update/slide','UpdateSlider')->name('update.slider');
});

// About Page All route
Route::controller(AboutController::class)->group(Function(){
    Route::get('/about/page','AboutPage')->name('about.page');
    Route::post('/update/about','UpdateAbout')->name('update.about');
    Route::get('/about','HomeAbout')->name('home.about');

    Route::get('/about/multi/image','AboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image','StoreMultiImage')->name('store.multi.image');

    Route::get('/all/multi/image','AllMultiImage')->name('all.multi.image');
    Route::get('/edit/multi/image/{id}','EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image','UpdateMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}','DeleteMultiImage')->name('delete.multi.image');
});


// Portfolio All route
Route::controller(PortfolioController::class)->group(Function(){
    Route::get('/all/portfolio','AllPortfolio')->name('all.portfolio');
    Route::get('/add/portfolio','AddPortfolio')->name('add.portfolio');
    Route::post('/store/portfolio','StorePortfolio')->name('store.portfolio');

    Route::get('/edit/portfolio/{id}','EditPortfolio')->name('edit.portfolio');
    Route::post('/update/portfolio','UpdatePortfolio')->name('update.portfolio');

    Route::get('/delete/portfolio/{id}','DeletePortfolio')->name('delete.portfolio');

    Route::get('portfolio/details/{id}','PortfolioDetails')->name('portfolio.details');

    Route::get('portfolio','HomePortfolio')->name('home.portfolio');
});


// Blog Category All route
Route::controller(BlogCategoryController::class)->group(Function(){
    Route::get('/all/blog/category','AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category','AddBlogCategory')->name('add.blog.category');
    Route::post('/store/blog/category','StoreBlogCategory')->name('store.blog.category');

    Route::get('/edit/blog/category/{id}','EditBlogCategory')->name('edit.blog.category');
    Route::post('/update/blog/category/{id}','UpdateBlogCategory')->name('update.blog.category');

    Route::get('/delete/blog/category/{id}','DeleteBlogCategory')->name('delete.blog.category');
});


// Blog All route
Route::controller(BlogController::class)->group(Function(){
    Route::get('/all/blog','AllBlog')->name('all.blog');
    Route::get('/add/blog','AddBlog')->name('add.blog');
    Route::post('/store/blog','StoreBlog')->name('store.blog');

    Route::get('/edit/blog/{id}','EditBlog')->name('edit.blog');
    Route::post('/update/blog/{id}','UpdateBlog')->name('update.blog');

    Route::get('/delete/blog/{id}','DeleteBlog')->name('delete.blog');

    Route::get('/blog/details/{id}','BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}','CategoryBog')->name('category.blog');

    Route::get('/blog','HomeBlog')->name('home.blog');
});


// Footer All route
Route::controller(FooterController::class)->group(Function(){
    Route::get('/footer/setup','FooterSetup')->name('footer.setup');

    Route::post('/update/footer/','UpdateFooter')->name('update.footer');
});

Route::controller(ContactController::class)->group(Function(){
    Route::get('/contact','Contact')->name('contact.me');
    Route::post('/store','StoreMessage')->name('store.message');

    Route::get('/contact/message','ContactMessage')->name('contact.message');

    Route::get('/show/message/{id}','ShowMessage')->name('show.message');

    Route::get('/delete/message/{id}','DeleteMessage')->name('delete.message');
});