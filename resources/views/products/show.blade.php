@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 20px;">
        <a href="{{ route('top') }}" style="text-decoration: none;">&laquo; 一覧に戻る</a>
    </div>

    <div class="card" style="max-width: 800px; margin: 0 auto; display: flex; gap: 30px; align-items: flex-start;">
        <div style="background:#eee; width:300px; height:300px; display:flex; align-items:center; justify-content:center; color:#aaa; font-size: 20px;">
            NO IMAGE
        </div>

        <div style="flex: 1;">
            <h1 style="margin-top: 0;">{{ $product->title }}</h1>
            <p style="font-size: 2em; color: #d00; font-weight: bold; margin: 10px 0;">
                ¥{{ number_format($product->price) }}
            </p>
            <p style="line-height: 1.6; margin-bottom: 30px;">
                {{ $product->body }}
            </p>

            @auth
                <a href="{{ route('checkout.index') }}" class="btn" style="padding: 15px 40px; font-size: 1.2em; background-color: #ff9900;">
                    カートに入れる（購入手続きへ）
                </a>
            @else
                <a href="{{ route('login') }}" class="btn" style="padding: 15px 40px; font-size: 1.2em; background-color: #888;">
                    ログインして購入する
                </a>
                <p style="font-size: 0.9em; margin-top: 10px; color: #666;">
                    ※購入には会員登録が必要です
                </p>
            @endauth
        </div>
    </div>
@endsection