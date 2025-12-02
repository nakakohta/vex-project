@extends('layouts.app')

@section('content')
<div style="text-align:center; background-color:#b9b9b9; padding:40px 0; width:80%; margin:0 auto;">
    <h1>会員登録</h1>

    @if ($errors->any())
        <div style="color:red; margin-bottom:20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div style="margin-bottom:20px;">
            <label style="display:inline-block; width:150px; text-align:left; font-size:20px;">氏名</label>
            <input type="text" name="name" style="width:300px; height:30px;" value="{{ old('name') }}">
        </div>

        <div style="margin-bottom:20px;">
            <label style="display:inline-block; width:150px; text-align:left; font-size:20px;">メール</label>
            <input type="email" name="email" style="width:300px; height:30px;" value="{{ old('email') }}">
        </div>

        <div style="margin-bottom:20px;">
            <label style="display:inline-block; width:150px; text-align:left; font-size:20px;">パスワード</label>
            <input type="password" name="password" style="width:300px; height:30px;">
        </div>

        <div style="margin-bottom:20px;">
            <label style="display:inline-block; width:150px; text-align:left; font-size:20px;">住所</label>
            <input type="text" name="address" style="width:300px; height:30px;" value="{{ old('address') }}">
        </div>

        <button type="submit" style="font-size:20px; width:300px; height:40px;">確認画面へ</button>
    </form>
</div>
@endsection