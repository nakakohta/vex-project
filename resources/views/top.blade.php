@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; margin-bottom: 30px;">商品一覧</h1>

    <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
        @foreach ($products as $product)
            <div class="card" style="width: 250px; text-align: center;">
                <div style="background:#eee; height:150px; margin-bottom:15px; display:flex; align-items:center; justify-content:center; color:#aaa;">
                    NO IMAGE
                </div>
                <h3 style="margin: 10px 0;">{{ $product->title }}</h3>
                <p style="color: #d00; font-weight: bold; font-size: 1.2em;">¥{{ number_format($product->price) }}</p>
                
                <a href="{{ route('products.show', $product->id) }}" class="btn" style="width: 80%;">詳細を見る</a>
            </div>
        @endforeach
    </div>
@endsection