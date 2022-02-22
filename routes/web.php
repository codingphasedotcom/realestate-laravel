<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages/home');
});


// Single listing 
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});
// Show All Listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
})->name('listings');


// User Saved Listings
Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');
// User Showing Status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
