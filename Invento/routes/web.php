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

use App\Http\Controllers\Pos\SupplierController;
use App\Http\Controllers\Pos\CustomerController;
use App\Http\Controllers\Pos\UnitController;
use App\Http\Controllers\Pos\CategoryController;
use App\Http\Controllers\Pos\ProductController;
use App\Http\Controllers\Pos\PurchaseController;
use App\Http\Controllers\Pos\DefaultController;
use App\Http\Controllers\Pos\InvoiceController;
use App\Http\Controllers\Pos\StockController;

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


// Frontend Page Layout and Content section-----------------------------------------------------------------------------------------------------------------------


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


// Backend Inventory Management System section-----------------------------------------------------------------------------------------------------------------------

Route::middleware('auth')->group(function(){

// Suppliers All route
Route::controller(SupplierController::class)->group(Function(){
    Route::get('/supplier/all','SupplierAll')->name('supplier.all');
    Route::get('/supplier/add','SupplierAdd')->name('supplier.add');
    Route::post('/supplier/store','SupplierStore')->name('supplier.store');

    Route::get('/supplier/edit/{id}','SupplierEdit')->name('supplier.edit');
    Route::post('/supplier/update','SupplierUpdate')->name('supplier.update');

    Route::get('/delete/supplier/{id}','DeleteSupplier')->name('supplier.delete');
});


//Customers All route
Route::controller(CustomerController::class)->group(Function(){
    Route::get('/customer/all','CustomerAll')->name('customer.all');
    Route::get('/customer/add','CustomerAdd')->name('customer.add');
    Route::post('/customer/store','CustomerStore')->name('customer.store');

    Route::get('/customer/edit/{id}','CustomerEdit')->name('customer.edit');
    Route::post('/customer/update','CustomerUpdate')->name('customer.update');

    Route::get('/delete/customer/{id}','DeleteCustomer')->name('customer.delete');
});


// Unit All route
Route::controller(UnitController::class)->group(Function(){
    Route::get('/unit/all','UnitAll')->name('unit.all');
    Route::get('/unit/add','UnitAdd')->name('unit.add');
    Route::post('/unit/store','UnitStore')->name('unit.store');

    Route::get('/unit/edit/{id}','UnitEdit')->name('unit.edit');
    Route::post('/unit/update','unitUpdate')->name('unit.update');

    Route::get('/delete/unit/{id}','DeleteUnit')->name('unit.delete');
});

// Category All route
Route::controller(CategoryController::class)->group(Function(){
    Route::get('/category/all','CategoryAll')->name('category.all');
    Route::get('/category/add','CategoryAdd')->name('category.add');
    Route::post('/category/store','CategoryStore')->name('category.store');

    Route::get('/category/edit/{id}','CategoryEdit')->name('category.edit');
    Route::post('/category/update','CategoryUpdate')->name('category.update');

    Route::get('/delete/category/{id}','DeleteCategory')->name('category.delete');
});

// Products All route
Route::controller(ProductController::class)->group(Function(){
    Route::get('/product/all','ProductAll')->name('product.all');
    Route::get('/product/add','ProductAdd')->name('product.add');
    Route::post('/product/store','ProductStore')->name('product.store');

    Route::get('/product/edit/{id}','ProductEdit')->name('product.edit');
    Route::post('/product/update','ProductUpdate')->name('product.update');

    Route::get('/delete/product/{id}','DeleteProduct')->name('product.delete');
});


// Purchase All route
Route::controller(PurchaseController::class)->group(Function(){
    Route::get('/purchase/all','PurchaseAll')->name('purchase.all');
    Route::get('/purchase/add','PurchaseAdd')->name('purchase.add');
    Route::post('/purchase/store','PurchaseStore')->name('purchase.store');

    Route::get('/delete/purchase/{id}','DeletePurchase')->name('purchase.delete');

    Route::get('/purchase/pending','PurchasePending')->name('purchase.pending');
    Route::get('/purchase/approve/{id}','PurchaseApprove')->name('purchase.approve');

    Route::get('/daily/purchase/report','DailyPurchaseReport')->name('daily.purchase.report');
    Route::get('/daily/purchase/pdf','DailyPurchasePdf')->name('daily.purchase.pdf');
});


// Default All route
Route::controller(DefaultController::class)->group(Function(){
    Route::get('/get-category','GetCategory')->name('get-category');
    Route::get('/get-product','GetProduct')->name('get-product');
    Route::get('/check-product-stock','GetStock')->name('check-product-stock');
});


// Invoice All route
Route::controller(InvoiceController::class)->group(Function(){
    Route::get('/invoice/all','InvoiceAll')->name('invoice.all');
    Route::get('/invoice/add','InvoiceAdd')->name('invoice.add');
    Route::post('/invoice/store','InvoiceStore')->name('invoice.store');

    Route::get('/invoice/pending/list','PendingList')->name('invoice.pending');
    Route::get('/delete/invoice/{id}','DeleteInvoice')->name('invoice.delete');
    Route::get('/invoice/approve/{id}','InvoiceApprove')->name('invoice.approve');
    Route::post('/approve/store/{id}','ApprovalStore')->name('approval.store');

    Route::get('/invoice/print/list','PrintInvoiceList')->name('print.invoiceList');
    Route::get('/invoice/print/{id}','PrintInvoice')->name('print.invoice');

    Route::get('/daily/invoice/report','DailyInvoiceReport')->name('daily.invoice.report');

    Route::get('/daily/invoice/pdf','DailyInvoicePdf')->name('daily.invoice.pdf');
});


// Stock All route
Route::controller(StockController::class)->group(Function(){
    Route::get('/stock/report','StockReport')->name('stock.report');
    Route::get('/stock/report/pdf','StockReportPdf')->name('stock.report.pdf');

    Route::get('/stock/supplier/report','StockSupplierReport')->name('stock.supplier.report');

    Route::get('/supplier/wise/pdf','SupplierWisePdf')->name('supplier.wise.pdf');
    Route::get('/product/wise/pdf','ProductWisePdf')->name('product.wise.pdf');
});

});
