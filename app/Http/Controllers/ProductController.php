<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ← Productモデルを使う宣言

class ProductController extends Controller
{
    // トップページ（商品一覧）
    public function index()
    {
        // データベースから商品を全件取得
        $products = Product::all();
        
        // 画面（top.blade.php）にデータを渡す
        return view('top', ['products' => $products]);
    }

    // 商品詳細ページ
    public function show($id)
    {
        // IDに対応する商品を1つ取得（なければ404エラー）
        $product = Product::findOrFail($id);

        // 画面（products/show.blade.php）にデータを渡す
        return view('products.show', ['product' => $product]);
    }
}