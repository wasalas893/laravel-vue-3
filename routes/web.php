<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbordControllers;



Route::get('/', function () {

    return view('pages.home');
});

Route::get('/company', function () {

    return view('pages.company');
});

Route::get('/contact', function () {

    return view('pages.contact');
});

Route::get('/faq', function () {

    return view('pages.faq');
});

Route::get('/journal', function () {

    return view('pages.journal');
});

Route::get('/stone-info', function () {

    return view('pages.journal_info');
});
Route::get('/review', function () {

    return view('pages.review');
});
Route::get('/stone-category', function () {

    return view('pages.stone_category');
});
Route::get('/stone-info', function () {

    return view('pages.stone_info');
});








// backend style

Route::group(['middleware'=>['auth:sanctum', 'verified']],function(){

    Route::get('/dashboard', function () {return view('backend.dashboard');})->name('dashboard');
    Route::get('/logout', [DashbordControllers::class, 'Logout'])->name('user.logout');

});
