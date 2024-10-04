<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'home'])->name('home');

Route::get('/GalangDana', function () {
    return view('layout.menu.GalangDana');
});

Route::get('/zakat', function () {
    return view('layout.menu.zakat');
});

Route::get('/login_akun', function () {
    return view('layout.settings.login_akun');
});


Route::get('/dashboard', function () {
    return view('layout.dashboard');
});

Route::get('/CampaignList', function () {
    return view('layout.list.CampaignList');
});

Route::get('/buat_akun', function () {
    return view('layout.settings.buat_akun');
});

Route::get('/payment', function () {
    return view('layout.payment.payment');
});

Route::get('/full_news/{id}', [ArticleController::class, 'show'])->name('full_news.show');
Route::post('/news', [ArticleController::class, 'store'])->name('news.store');

Route::get('/settings', function () {
    return view('layout.settings.settings');
});

Route::get('/create_news', [ArticleController::class, 'create'])->name('create_news');

Route::get('/tentang', function(){
    return view('layout.settings.tentang');
});

Route::get('/bantuan', function(){
    return view('layout.settings.bantuan');
});

Route::get('/akuntabilitas', function(){
    return view('layout.settings.akuntabilitas');
});

Route::get('/syarat', function(){
    return view('layout.settings.syarat');
});

Route::get('/Program_1', function(){
    return view('layout.program.program_1');
});

Route::get('/Program_2', function(){
    return view('layout.program.program_2');
});

Route::get('/Program_3', function(){
    return view('layout.program.program_3');
});
