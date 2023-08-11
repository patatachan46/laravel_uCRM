<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InertiaTestController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// 商品ページ_Laravel_Breeze経由
Route::resource('items', ItemController::class)->middleware(['auth', 'verified']);
// 顧客ページ_Laravel_Breeze経由
Route::resource('customers', CustomerController::class)->middleware(['auth', 'verified']);



// 動作確認用ルーティング↓
// ------------------------------------------------------------

// テストページ表示用ダイレクトルーティング
Route::get('/inertia-test', function () {
  return Inertia::render('InertiaTest');
});

// テストページ表示用ダイレクトルーティング
Route::get('/component-test', function () {
  return Inertia::render('ComponentTest');
});

// テストページ 表示用ルーティング
Route::get('/inertia/index', [InertiaTestController::class, 'index'])->name('inertia.index');
// テストページ ポストメソッド用ルーティング
Route::post('/inertia', [InertiaTestController::class, 'store'])->name('inertia.store');
Route::get('/inertia/create', [InertiaTestController::class, 'create'])->name('inertia.create');
Route::get('/inertia/show/{id}', [InertiaTestController::class, 'show'])->name('inertia.show');
Route::delete('/inertia/{id}', [InertiaTestController::class, 'delete'])->name('inertia.delete');

// ウェルカムページ表示用ルーティング
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
