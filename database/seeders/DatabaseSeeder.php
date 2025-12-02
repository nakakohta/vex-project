<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            // ↓↓↓ この1行を追加
            'address' => '東京都千代田区1-1-1', 
        ]);
        
        // 商品データのシーダーもここで呼ぶようにしておくと便利です（任意）
        $this->call(ProductSeeder::class);
    }
}
