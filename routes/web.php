<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomePageController;

Route::get('/', function () {
    return view('home');
});
Route::post('/submit', [HomePageController::class, 'submit'])->name('home.submit');

Route::get('/ai', function () {
    return view('ai');
});
use App\Http\Controllers\ChatGPTController;
use App\Http\Controllers\ChatGPTControllerPC;
use App\Http\Controllers\ProsConsController;
use App\Http\Controllers\TelegramController;


Route::post('/send-message', [TelegramController::class, 'sendMessage'])->name('send.message');

Route::get('/chatgpt', [ChatGPTController::class, 'getResponse']);
Route::get('/chatgptPC', [ChatGPTControllerPC::class, 'getResponse']);
Route::get('/chatgptPRO', [ProsConsController::class, 'getResponse']);

Route::get('/get-auto-listings', [ChatGPTController::class, 'getResponse'])->name('get.auto.listings');


Route::get('/auto-listings', [CarController::class, 'index'])->name('auto.listings');
//Route::get('/car-details/{vin}/{records}', [CarController::class, 'show'])->name('car.details');
Route::get('/fetch-auto-listings', [CarController::class, 'fetchAutoListings'])->name('fetch.auto.listings');
Route::post('/handle-car-details', [CarController::class, 'handleCarDetails'])->name('handle.car.details');
Route::get('/car-details/{vin}', [CarController::class, 'show'])->name('car.details');
// web.php (routes file)
Route::get('/get-content', function () {
    return view('carLoad');
});


