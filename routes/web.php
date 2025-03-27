<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'showHome'])->name('home');

Route::post('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/confirm', [StripeController::class, 'confirm'])->name('confirm');
Route::get('/download', [StripeController::class, 'download'])->name('download.file');

Route::get('admin', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
    Route::get('admin/client', [AdminController::class, 'showClient'])->name('admin.client');
    Route::get('admin/ebook', [AdminController::class, 'showEbook'])->name('admin.ebook');
    Route::get('admin/setting', [AdminController::class, 'showSetting'])->name('admin.setting');
    Route::post('admin/update', [AdminController::class, 'updateEbook'])->name('admin.ebook.update');
    Route::post('admin/updatePassword', [AdminController::class, 'updatePassword'])->name('admin.update.password');
    Route::get('admin/export', [AdminController::class, 'export'])->name('admin.export');
});

Route::get('language/{lang}', [LanguageController::class, 'switch'])->name('lang.switch');

Route::get('/terms-of-service', [LegalController::class, 'showTerms'])->name('legal.terms');
Route::get('/privacy-policy', [LegalController::class, 'showPrivacy'])->name('legal.privacy');

