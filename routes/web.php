<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

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

Route::get('/full_news/{id}', function ($id) {
    return view('layout.full_news', ['id' => $id]);
});

Route::get('/settings', function () {
    return view('layout.settings');
});