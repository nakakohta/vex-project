<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // ↓この行を追加（保存してよい項目を指定）
    protected $fillable = ['title', 'body', 'price'];
}