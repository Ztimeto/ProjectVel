<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\UnifiedController;
use Illuminate\Support\Facades\Route;

// Route to display home page with both articles and campaigns
Route::get('/', [UnifiedController::class, 'home'])->name('home');

// Route to display specific campaign details
Route::get('/program_1/{id}', [UnifiedController::class, 'showCampaign'])->name('program_1.show');

// Route to display specific article/news details
Route::get('/full_news/{id}', [UnifiedController::class, 'showArticle'])->name('full_news.show');

// Routes for static views like zakat, galang dana, etc.
Route::view('/GalangDana', 'layout.menu.GalangDana');
Route::view('/zakat', 'layout.menu.zakat');
Route::view('/login_akun', 'layout.settings.login_akun');
Route::view('/dashboard', 'layout.dashboard');
Route::view('/CampaignList', 'layout.list.CampaignList');
Route::view('/buat_akun', 'layout.settings.buat_akun');
Route::view('/settings', 'layout.settings.settings');
Route::view('/tentang', 'layout.settings.tentang');
Route::view('/bantuan', 'layout.settings.bantuan');
Route::view('/akuntabilitas', 'layout.settings.akuntabilitas');
Route::view('/syarat', 'layout.settings.syarat');

// Routes for article creation
Route::get('/create_news', [UnifiedController::class, 'createArticle'])->name('create_news');
Route::post('/news', [UnifiedController::class, 'storeArticle'])->name('news.store');

// Payment-related routes
Route::post('/create-donation', [DonationController::class, 'createDonation']);

