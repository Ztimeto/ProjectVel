<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'home'])->name('home');

Route::get('/dana', function () {
    return view('layout.dana');
});

Route::get('/GalangDana', function () {
    return view('layout.GalangDana');
});

Route::get('/zakat', function () {
    return view('layout.zakat');
});

Route::get('/account', function () {
    return view('layout.account');
});


Route::get('/dashboard', function () {
    return view('layout.dashboard');
});

Route::get('/CampaignList', function () {
    return view('layout.CampaignList');
});

Route::get('/akun', function () {
    return view('layout.akun');
});

Route::get('/payment', function () {
    return view('layout.payment');
});

Route::get('/full_news/{id}', [ArticleController::class, 'show'])->name('full_news.show');
Route::post('/news', [ArticleController::class, 'store'])->name('news.store');

Route::get('/settings', function () {
    return view('layout.settings');
});

Route::get('/create_news', [ArticleController::class, 'create'])->name('create_news');
