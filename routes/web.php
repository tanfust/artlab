<?php

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
use App\Http\Controllers\EventController;
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
    return view('welcome');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/tickets', function () {
    return view('buy-ticket');
});
Route::get('/mission', function () {
    return view('our-mission');
});

Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/load-login',[AdminLoginController::class,'index']);
Route::post('/admin-login',[AdminLoginController::class,'login']);

Route::get('/load-register',[AdminRegisterController::class,'index']);
Route::post('/register',[AdminRegisterController::class,'register']);

Route::get('/history',[HistoryController::class,'index']);


Route::get('/my-wallet',[MyWalletController::class,'index']);

Route::get('/sell',[SellController::class,'index']);


Route::get('/market-place',[MarketPlaceController::class,'index']);

Route::get('/active-bids',[ActiveBidsController::class,'index']);

Route::get('/all-saved',[AllSavedController::class,'index']);


Route::get('/my-profile',[profileController::class,'index']);

Route::get('/setting',[SettingController::class,'index']);

Route::get('/notification',[NotificationController::class,'index']);

Route::get('/message',[MessageController::class,'index']);

Route::get('/forgot-password',[FlorgotPasswordController::class,'index']);
Route::post('/find-password',[FlorgotPasswordController::class,'findPassword']);

Route::get('/verify',[VerifyController::class,'index']);
Route::post('/verification',[VerifyController::class,'verification']);

Route::get('/my-collection',[MyCollectionController::class,'index']);

Route::get('/market-place-details',[MarketPlaceDetailsController::class,'index']);

Route::get('/upload-product',[ProductUploadController::class,'index']);

Route::post('/change-password',[SettingController::class,'changePassword']);





// List all events
Route::get('/events', [EventController::class, 'index'])->name('events.index');

// Show the form to create a new event
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

// Store a new event
Route::post('/events', [EventController::class, 'store'])->name('events.store');

// Show a single event
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Show the form to edit an event
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');

// Update an event
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');

// Delete an event
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
