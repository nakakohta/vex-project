<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEX | 会社案内</title>
    <style>
        body { background-color: black; color: white; }
        header { background-color: #8b0000; padding: 40px 0; }
        .header-inner { max-width: 1200px; margin: 0 40px; display: flex; align-items: center; justify-content: space-between; }
        nav ul { list-style: none; display: flex; gap: 40px; }
        nav a { color: black; font-weight: 500; text-decoration: none; }
    </style>
</head>
<body>
    <header>
        <div class="header-inner">
            <h1 class="logo">
                <a href="{{ route('homepage.index') }}">
                    <img src="{{ asset('images/logo.png') }}" width="200" height="100" alt="VEX">
                </a>
            </h1>
            <nav>
                <ul>
                    <li><a href="{{ route('homepage.company') }}">会社案内</a></li>
                    <li><a href="{{ route('homepage.recruit') }}">採用情報</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main style="padding:60px 40px;">
        <section style="max-width:900px;margin:0 auto;">
            <h2 style="font-size:32px;margin-bottom:20px;">会社案内</h2>
            <p style="line-height:1.8;margin-bottom:20px;">
                VEX は「ITによる世界平和の実現」を掲げ、社会課題をテクノロジーで解決する企業です。
            </p>
            <p style="line-height:1.8;">
                研究開発から社会実装までを一気通貫で担い、グローバルに事業を展開しています。
            </p>
        </section>
    </main>
</body>
</html>