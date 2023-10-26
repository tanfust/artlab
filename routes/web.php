<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ReservationController;
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
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;


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

Route::get('/dashboard', function () {
    return view('back-office/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    // Sell route
    Route::get('/sell', [SellController::class, 'index']);
    // Marketplace route
    Route::get('/market-place', [MarketPlaceController::class, 'index']);
    // Auctions route
    Route::get('/auctions', [AuctionController::class, 'index'])->name('auctions.index');
    Route::get('/auctions/create', [AuctionController::class, 'create'])->name('auctions.create');
    Route::post('/auctions', [AuctionController::class, 'store'])->name('auctions.store');
    Route::delete('/auctions/{id}', [AuctionController::class, 'destroy'])->name('auctions.destroy');
    Route::get('/auctions/{id}/edit', [AuctionController::class, 'edit'])->name('auctions.edit');
    Route::put('/auctions/{id}', [AuctionController::class, 'update'])->name('auctions.update');
    //Reservation routes
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/{id}/cancel', [ReservationController::class, 'cancel'])->name('reservations.cancel');
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

    // Orders route
    Route::resource('orders', OrderController::class);
    // Profile route
    Route::get('/my-profile', [profileController::class, 'index']);
    // Settings route
    Route::get('/setting', [SettingController::class, 'index']);
    // MyCollection route
    Route::get('/my-collection', [GalleryController::class, 'index']);
    // MarketplaceDetails route
    Route::get('/market-place-details', [MarketPlaceDetailsController::class, 'index']);

    Route::resource('Gallery', GalleryController::class);
    Route::resource('artwork', ArtworkController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
});



Route::middleware('guest')->group(function () {
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
    Route::get('/live-auctions', [AuctionController::class, 'frontPage'])->name('front-page');
    Route::get('/creator', function () {
        return view('front-office/creator');
    });
    Route::get('/new-account', function () {
        return view('front-office/new-creator');
    });
    Route::get('/blog', 'App\Http\Controllers\ArticleController@showBlog')->name('blog');
    Route::get('/articles/search', 'ArticleController@search')->name('articles.search');
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
});


require __DIR__ . '/auth.php';
