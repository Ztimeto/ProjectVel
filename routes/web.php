<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\UnifiedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactUsController;

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

Route::get('/Contact_us', [ContactUsController::class, 'index'])->name('Contact_us');
Route::post('/contact_us', [ContactUsController::class, 'store'])->name('Contact_us.store');

// Routes for article creation
Route::get('/create_news', [UnifiedController::class, 'createArticle'])->name('create_news');
Route::post('/news', [UnifiedController::class, 'storeArticle'])->name('news.store');

// Routes for campaign creation
Route::get('/create_campaign', [UnifiedController::class, 'createCampaign'])->name('create_campaign');
Route::post('/campaigns', [UnifiedController::class, 'storeCampaign'])->name('campaigns.store');

// Payment-related routes
Route::post('/create-donation', [DonationController::class, 'createDonation']);

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Google authentication routes
Route::get('/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Page routes
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');
Route::get('/payment', [PageController::class, 'payment'])->name('payment');
