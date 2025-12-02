<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vex Project</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background-color: #f9f9f9; }
        header { background: #333; color: white; padding: 15px; margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; }
        header a { color: white; text-decoration: none; }
        nav a { margin-left: 15px; }
        .btn { padding: 8px 15px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; display: inline-block; }
        .card { background: white; border: 1px solid #ddd; padding: 20px; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .container { max-width: 800px; margin: 0 auto; }
    </style>
</head>
<body>
    <header>
        <div>
            <a href="{{ route('top') }}" style="font-weight: bold; font-size: 1.4em;">Vex Shop</a>
        </div>
        <nav>
            @auth
                <span>ようこそ、{{ Auth::user()->name }}さん</span>
                <a href="{{ route('checkout.index') }}">🛒 カート</a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="border:none; background:none; color:#ccc; cursor:pointer; text-decoration:underline; margin-left:10px;">ログアウト</button>
                </form>
            @else
                <a href="{{ route('register') }}">会員登録</a>
                <a href="{{ route('login') }}">ログイン</a>
            @endauth
        </nav>
    </header>

    <main class="container">
        @if (session('success'))
            <div style="background: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer style="margin-top: 50px; text-align: center; color: #888; font-size: 0.8em;">
        &copy; 2025 Vex Project
    </footer>
</body>
</html>