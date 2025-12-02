@extends('layouts.app')

@section('content')
<div style="text-align:center; background-color:#b9b9b9; padding:40px 0; width:80%; margin:0 auto;">
    <h1 style="font-size:36px; margin-bottom:20px;">登録情報確認</h1>

    <div style="font-size:22px; margin-bottom:10px;">氏名：{{ $data['name'] }}</div>
    <div style="font-size:22px; margin-bottom:10px;">メール：{{ $data['email'] }}</div>
    <div style="font-size:22px; margin-bottom:10px;">パスワード：セキュリティのため非表示</div>
    <div style="font-size:22px; margin-bottom:20px;">住所：{{ $data['address'] }}</div>

    <form action="{{ route('register.complete') }}" method="post" style="margin-bottom:10px;">
        @csrf
        <button type="submit" style="font-size:20px; width:200px; height:40px;">登録確定</button>
    </form>

    <div>
        <a href="{{ route('register') }}">
            <button type="button" style="font-size:18px; width:150px; height:36px;">修正する</button>
        </a>
    </div>
</div>
@endsection