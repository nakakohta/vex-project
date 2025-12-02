<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // 追加

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // ダミー商品を3つ作成
        Product::create([
            'title' => 'テスト商品A',
            'body'  => 'これはテスト商品Aの説明文です。',
            'price' => 1000,
        ]);

        Product::create([
            'title' => 'テスト商品B',
            'body'  => '便利なテスト商品Bです。',
            'price' => 2500,
        ]);

        Product::create([
            'title' => '高級テスト商品C',
            'body'  => 'とても高価なテスト商品Cです。',
            'price' => 10000,
        ]);
    }
}