<?php

use App\Http\Controllers\AuctionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\MyWalletController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\MarketPlaceController;
use App\Http\Controllers\ActiveBidsController;
use App\Http\Controllers\AllSavedController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\FlorgotPasswordController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\MyCollectionController;
use App\Http\Controllers\MarketPlaceDetailsController;
use App\Http\Controllers\ProductUploadController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {
    return view('front-office/welcome');
});
Route::get('/events', function () {
    return view('front-office/events');
});
Route::get('/tickets', function () {
    return view('front-office/buy-ticket');
});
Route::get('/mission', function () {
    return view('front-office/our-mission');
});
Route::get('/blog', function () {
    return view('front-office/blog');
});
Route::get('/live-auctions', function () {
    return view('front-office/auctions');
});
Route::get('/creator', function () {
    return view('front-office/creator');
});
Route::get('/new-account', function () {
    return view('front-office/new-creator');
});

Route::resource('articles', ArticleController::class);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/load-login', [AdminLoginController::class, 'index']);
Route::post('/admin-login', [AdminLoginController::class, 'login']);

Route::get('/load-register', [AdminRegisterController::class, 'index']);
Route::post('/register', [AdminRegisterController::class, 'register']);

Route::get('/history', [HistoryController::class, 'index']);


Route::get('/my-wallet', [MyWalletController::class, 'index']);

Route::get('/sell', [SellController::class, 'index']);


Route::get('/market-place', [MarketPlaceController::class, 'index']);


// Route::get('/auctions', 'AuctionController@index')->name('auctions.index');
// Route::get('/auctions/create', 'AuctionController@create')->name('auctions.create');
// Route::post('/auctions', 'AuctionController@store')->name('auctions.store');

Route::get('/auctions', [AuctionController::class, 'index'])->name('auctions.index');
Route::get('/auctions/create', [AuctionController::class, 'create'])->name('auctions.create');
Route::post('/auctions', [AuctionController::class, 'store'])->name('auctions.store');


// Route::get('/my-orders', [OrderController::class, 'index'])->name('orders.index');
// Route::get('/my-orders/create', [OrderController::class, 'create'])->name('orders.create');
// Route::post('/my-orders/create', [OrderController::class, 'store'])->name('orders.store');

Route::resource('orders', OrderController::class);



Route::get('/my-profile', [profileController::class, 'index']);

Route::get('/setting', [SettingController::class, 'index']);

Route::get('/notification', [NotificationController::class, 'index']);

Route::get('/message', [MessageController::class, 'index']);

Route::get('/forgot-password', [FlorgotPasswordController::class, 'index']);
Route::post('/find-password', [FlorgotPasswordController::class, 'findPassword']);

Route::get('/verify', [VerifyController::class, 'index']);
Route::post('/verification', [VerifyController::class, 'verification']);

Route::get('/my-collection', [MyCollectionController::class, 'index']);

Route::get('/market-place-details', [MarketPlaceDetailsController::class, 'index']);

Route::get('/upload-product', [ProductUploadController::class, 'index']);

Route::post('/change-password', [SettingController::class, 'changePassword']);


Route::get('/blog', 'App\Http\Controllers\ArticleController@showBlog')->name('blog');

