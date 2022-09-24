<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbordControllers;

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

//vue routes

Route::get('/', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.home', ['menu' => 'home', 'meta' => $meta]);
});

Route::get('/company', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.company', ['menu' => 'company', 'meta' => $meta]);
});

Route::get('/contact', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.contact', ['menu' => 'contact', 'meta' => $meta]);
});

Route::get('/faq', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.faq', ['menu' => 'faq', 'meta' => $meta]);
});

Route::get('/journal', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.journal', ['menu' => 'journal', 'meta' => $meta]);
});

Route::get('/stone-info', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.journal_info', ['menu' => 'journal-info', 'meta' => $meta]);
});
Route::get('/review', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.review', ['menu' => 'review', 'meta' => $meta]);
});
Route::get('/stone-category', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.stone_category', ['menu' => 'stone-category', 'meta' => $meta]);
});
Route::get('/stone-info', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.stone_info', ['menu' => 'stone-info', 'meta' => $meta]);
});








// backend style

Route::group(['middleware'=>['auth:sanctum', 'verified']],function(){

    Route::get('/dashboard', function () {return view('backend.dashboard');})->name('dashboard');

    Route::get('/logout', [DashbordControllers::class, 'Logout'])->name('user.logout');

});
