<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ImageController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SuscriberController;
use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\EventController;
use App\Http\Controllers\backend\FaqController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\TestinominalController;
use App\Http\Controllers\backend\OffersController;
use App\Http\Controllers\backend\RatingController;
use App\Http\Controllers\backend\CartController;
use App\Http\Controllers\ServiesController;
use App\Http\Controllers\backend\PolicyController;
use App\Mail\MyTestMail;
use App\Http\Controllers\backend\EmailController;
use App\Http\Controllers\StripePaymentController;

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

//Route::get('/', function () {
//    return view('frontend/pages/index');
//});
Route::get('navbar', [\App\Http\Controllers\FrontBaseController::class, 'nav'])->name('navbar');
Route::get('/', [\App\Http\Controllers\FrontBaseController::class, 'index'])->name('index');
Route::get('GetSubCat/{id}',[\App\Http\Controllers\FrontBaseController::class,'GetSubCat']);
Route::get('single/{slug}',[\App\Http\Controllers\FrontBaseController::class,'single'])->name('single');
Route::get('subcategory/{id}',[\App\Http\Controllers\FrontBaseController::class,'subcategory'])->name('subcategory');
Route::get('contactus.index', [\App\Http\Controllers\FrontBaseController::class, 'contactus'])->name('contactus.index');
Route::get('event', [\App\Http\Controllers\FrontBaseController::class, 'event'])->name('event');
Route::get('aboutus', [\App\Http\Controllers\FrontBaseController::class, 'aboutus'])->name('aboutus');
Route::get('services', [\App\Http\Controllers\FrontBaseController::class, 'services'])->name('services');
Route::get('bestdeal', [\App\Http\Controllers\FrontBaseController::class, 'bestdeal'])->name('bestdeal');
Route::get('products', [\App\Http\Controllers\FrontBaseController::class, 'product'])->name('products');
Route::get('FAQ', [\App\Http\Controllers\FrontBaseController::class, 'faq'])->name('faq');
Route::get('privacy', [\App\Http\Controllers\FrontBaseController::class, 'privacy'])->name('privacy');
//Route::get('search', [\App\Http\Controllers\FrontBaseController::class, 'search'])->name('search');
//Route::get('autocomplete', [\App\Http\Controllers\FrontBaseController::class, 'autocomplete'])->name('autocomplete');


Auth::routes();

Route::middleware(['web','auth'])->group(function(){


Route::post('rating-store', [RatingController::class, 'store'])->name('rating.store');
Route::post('suscribers-store', [SuscriberController::class, 'store'])->name('suscribers.store');
    Route::post('contact-store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('User', [HomeController::class, 'user'])->name('user.index');
Route::get('changeStatususer', [HomeController::class, 'changeStatususer'])->name('changeStatususer');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//category
Route::get('category-create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category-store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category-index', [CategoryController::class, 'index'])->name('category.index');
Route::get('category-view/{id}', [CategoryController::class, 'show'])->name('category.view');
Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('category-update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category-destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('changeStatus', [CategoryController::class, 'changeStatus'])->name('changeStatus');




//subcategory
Route::get('sub-category-create', [SubCategoryController::class, 'create'])->name('subcategory.create');
Route::post('sub-category-store', [SubCategoryController::class, 'store'])->name('subcategory.store');
Route::get('sub-category-index', [SubCategoryController::class, 'index'])->name('subcategory.index');
Route::get('sub-category-view/{id}', [SubCategoryController::class, 'show'])->name('subcategory.view');
Route::get('sub-category-edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategory.edit');
Route::put('sub-category-update/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');

//product
Route::get('product-create', [ProductController::class, 'create'])->name('product.create');
Route::post('product-store', [ProductController::class, 'store'])->name('product.store');
Route::get('product-index', [ProductController::class, 'index'])->name('product.index');
Route::get('product-show/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('product-edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('product-update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('product-destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


Route::get('GetSubCatAgainstMainCatEdt/{id}',[ProductController::class,'GetSubCatAgainstMainCatEdit']);
Route::get('GetSubCat/{id}',[ProductController::class,'GetSubCat']);



//image
Route::get('image-create',[ImageController::class, 'create'])->name('image.create');
Route::post('image-store', [ImageController::class, 'store'])->name('image.store');
Route::get('image-index', [ImageController::class, 'index'])->name('image.index');


//order

Route::get('order-index', [OrderController::class, 'index'])->name('order.index');
    Route::get('changeOrderStatus', [OrderController::class, 'changeOrderStatus'])->name('changeOrderStatus');



//setting
Route::get('setting-create', [SettingController::class, 'create'])->name('setting.create');
Route::post('setting-store', [SettingController::class, 'store'])->name('setting.store');
Route::get('setting-index', [SettingController::class, 'index'])->name('setting.index');
Route::get('setting-show/{id}', [SettingController::class, 'show'])->name('setting.show');
Route::get('setting-edit/{id}', [SettingController::class, 'edit'])->name('setting.edit');
Route::put('setting-update/{id}', [SettingController::class, 'update'])->name('setting.update');
Route::delete('setting-destroy/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');

//suscribers
Route::get('suscribers-create', [SuscriberController::class, 'create'])->name('suscribers.create');

Route::get('suscribers-index', [SuscriberController::class, 'index'])->name('suscribers.index');
Route::delete('suscribers-destroy/{id}', [SuscriberController::class, 'destroy'])->name('suscribers.destroy');


//about-us
Route::get('aboutus-index', [AboutUsController::class, 'index'])->name('aboutus.index');
Route::get('aboutus-show/{id}', [AboutUsController::class, 'show'])->name('aboutus.show');
Route::get('aboutus-edit/{id}', [AboutUsController::class, 'edit'])->name('aboutus.edit');
Route::put('aboutus-update/{id}', [AboutUsController::class, 'update'])->name('aboutus.update');
Route::delete('aboutus-destroy/{id}', [AboutUsController::class, 'destroy'])->name('aboutus.destroy');


//event
Route::get('event-create', [EventController::class, 'create'])->name('event.create');
Route::post('event-store', [EventController::class, 'store'])->name('event.store');
Route::get('event-index', [EventController::class, 'index'])->name('event.index');
Route::get('event-show/{id}', [EventController::class, 'show'])->name('event.show');
Route::get('event-edit/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::put('event-update/{id}', [EventController::class, 'update'])->name('event.update');
Route::delete('event-destroy/{id}', [EventController::class, 'destroy'])->name('event.destroy');

//faq
Route::get('faq-create', [FaqController::class, 'create'])->name('faq.create');
Route::post('faq-store', [FaqController::class, 'store'])->name('faq.store');
Route::get('faq-index', [FaqController::class, 'index'])->name('faq.index');
Route::get('faq-show/{id}', [FaqController::class, 'show'])->name('faq.show');
Route::get('faq-edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('faq-update/{id}', [FaqController::class, 'update'])->name('faq.update');
Route::delete('faq-destroy/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');


//contact
Route::get('contact-index', [ContactController::class, 'index'])->name('contact.index');
Route::get('contact-show/{id}', [ContactController::class, 'show'])->name('contact.show');



//team
Route::get('team-create', [TeamController::class, 'create'])->name('team.create');
Route::post('team-store', [TeamController::class, 'store'])->name('team.store');
Route::get('team-index', [TeamController::class, 'index'])->name('team.index');
Route::get('team-show/{id}', [TeamController::class, 'show'])->name('team.show');
Route::get('team-edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::put('team-update/{id}', [TeamController::class, 'update'])->name('team.update');
Route::delete('team-destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

//Testinominals
Route::get('testinominals-create', [TestinominalController::class, 'create'])->name('testinominals.create');
Route::post('testinominals-store', [TestinominalController::class, 'store'])->name('testinominals.store');
Route::get('testinominals-index', [TestinominalController::class, 'index'])->name('testinominals.index');
Route::get('testinominals-show/{id}', [TestinominalController::class, 'show'])->name('testinominals.show');
Route::get('testinominals-edit/{id}', [TestinominalController::class, 'edit'])->name('testinominals.edit');
Route::put('testinominals-update/{id}', [TestinominalController::class, 'update'])->name('testinominals.update');
Route::delete('testinominals-destroy/{id}', [TestinominalController::class, 'destroy'])->name('testinominals.destroy');

//offers
Route::get('offer-create', [OffersController::class, 'create'])->name('offer.create');
Route::post('offer-store', [OffersController::class, 'store'])->name('offer.store');
Route::get('offer-index', [OffersController::class, 'index'])->name('offer.index');
Route::get('offer-show/{id}', [OffersController::class, 'show'])->name('offer.show');
Route::get('offer-edit/{id}', [OffersController::class, 'edit'])->name('offer.edit');
Route::put('offer-update/{id}', [OffersController::class, 'update'])->name('offer.update');
Route::delete('offer-destroy/{id}', [OffersController::class, 'destroy'])->name('offer.destroy');

//services
Route::get('service-create', [ServiesController::class, 'create'])->name('service.create');
Route::post('service-store', [ServiesController::class, 'store'])->name('service.store');
Route::get('service-index', [ServiesController::class, 'index'])->name('service.index');
Route::get('service-show/{id}', [ServiesController::class, 'show'])->name('service.show');
Route::get('service-edit/{id}', [ServiesController::class, 'edit'])->name('service.edit');
Route::put('service-update/{id}', [ServiesController::class, 'update'])->name('service.update');
Route::delete('service-destroy/{id}', [ServiesController::class, 'destroy'])->name('service.destroy');


    Route::get('cart-list', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart-store/{id}', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
//    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    Route::get('total', [CartController::class, 'total'])->name('total');


    //policy
    Route::get('policy-create', [PolicyController::class, 'create'])->name('policy.create');
    Route::post('policy-store', [PolicyController::class, 'store'])->name('policy.store');
    Route::get('policy-index', [PolicyController::class, 'index'])->name('policy.index');
    Route::get('policy-show/{id}', [PolicyController::class, 'show'])->name('policy.show');
    Route::get('policy-edit/{id}', [PolicyController::class, 'edit'])->name('policy.edit');
    Route::put('policy-update/{id}', [PolicyController::class, 'update'])->name('policy.update');
    Route::delete('policy-destroy/{id}', [PolicyController::class, 'destroy'])->name('policy.destroy');

//email
    Route::get('email', [EmailController::class, 'create'])->name('email.create');
    Route::post('send', [EmailController::class, 'send'])->name('email.send');


//stripe
    Route::get('check-out', [\App\Http\Controllers\FrontBaseController::class, 'checkout'])->name('stripe.index');
    Route::post('stripe-post/{u_id}', [\App\Http\Controllers\FrontBaseController::class, 'afterPayment'])->name('stripe.post');
    Route::delete('clear/{u_id}', [\App\Http\Controllers\FrontBaseController::class, 'clearAllCart'])->name('cart.clear');
    Route::get('your-order', [\App\Http\Controllers\FrontBaseController::class, 'Order'])->name('your-order');
});
//rating
Route::get('rating-create', [RatingController::class, 'create'])->name('rating.create');








