@extends('layouts.app')

@section('content')
<div style="text-align:center; background-color:#b9b9b9; padding:40px 0; width:80%; margin:0 auto;">
    <h1>ログイン</h1>

    @if ($errors->any())
        <div style="color:red; margin-bottom:20px;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login') }}" method="post" style="font-size:20px; margin-top:20px;">
        @csrf

        <div style="margin-bottom:20px;">
            <label for="email" style="display:inline-block; width:150px; text-align:left; font-size:25px;">メール</label>
            <input type="email" id="email" name="email" style="width:300px; height:40px; font-size:20px;" value="{{ old('email') }}">
        </div>

        <div style="margin-bottom:20px;">
            <label for="password" style="display:inline-block; width:150px; text-align:left; font-size:25px;">パスワード</label>
            <input type="password" id="password" name="password" style="width:300px; height:40px; font-size:20px;">
        </div>

        <button type="submit" style="font-size:20px; width:150px; height:40px;">ログイン</button>
    </form>
</div>
@endsection