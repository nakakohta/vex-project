<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;

/*
|--------------------------------------------------------------------------
| 1. 商品関連（誰でも見れるページ）
|--------------------------------------------------------------------------
| 一言まとめ：サイトの顔となる部分
*/
// トップページ（兼 商品一覧）
Route::get('/', [ProductController::class, 'index'])->name('top');

// 商品詳細ページ（{id}には商品の番号が入ります）
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products', [ProductController::class, 'show'])->name('products.show');


/*
|--------------------------------------------------------------------------
| 2. 会員登録・ログイン関連
|--------------------------------------------------------------------------
| 一言まとめ：ユーザー認証の入り口
*/
// 会員登録ページを表示
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
// 会員登録処理（データを送信）
Route::post('/register', [AuthController::class, 'register']);

// アカウント作成確認ページ
Route::get('/register/check', [AuthController::class, 'check'])->name('register.check');

// ログインページを表示
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// ログイン処理（データを送信）
Route::post('/login', [AuthController::class, 'login']);
// ログアウト処理
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| 3. 購入・決済関連（ログイン必須）
|--------------------------------------------------------------------------
| 一言まとめ：売上を作る重要エリア
| ポイント：middleware('auth') で「ログインしていない人は入れない」制限をかけています
*/
Route::middleware(['auth'])->group(function () {
    
    // 購入ページ（カート兼レジ）を表示
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    
    // 購入確定処理（「購入確定」ボタンを押した時）
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

    // 購入完了ページ（サンクスページ）
    Route::get('/checkout/complete', [CheckoutController::class, 'complete'])->name('checkout.complete');
    
});