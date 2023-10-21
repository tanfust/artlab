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
    // Orders route
    Route::resource('orders', OrderController::class);
    // Profile route
    Route::get('/my-profile', [profileController::class, 'index']);
    // Settings route
    Route::get('/setting', [SettingController::class, 'index']);
    // MyCollection route
    Route::get('/my-collection', [MyCollectionController::class, 'index']);
    // MarketplaceDetails route
    Route::get('/market-place-details', [MarketPlaceDetailsController::class, 'index']);
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
    Route::get('/live-auctions', function () {
        return view('front-office/auctions');
    });
    Route::get('/creator', function () {
        return view('front-office/creator');
    });
    Route::get('/new-account', function () {
        return view('front-office/new-creator');
    });
});

require __DIR__.'/auth.php';
