<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="{{ asset('css/company.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEX | 会社案内</title>
    <style>
        body { background-color: black; color: white; }
        header { background-color: #8b0000; padding: 40px 0; }
        .header-inner { max-width: 1200px; margin: 0 40px; display: flex; align-items: center; justify-content: space-between; }
        nav ul { list-style: none; display: flex; gap: 40px; }
        nav a { color: black; font-weight: 500; text-decoration: none; }
        .heading { font-size: 25px; text-align: center; color: #ffd900; }
        footer { background-color: #8B0000; padding: 40px 0; }
        footer h2 { text-align: center; margin-bottom: 25px; color: white; border-bottom: 2px solid white; padding-bottom: 10px; display: table; margin-left: auto; margin-right: auto; }
        .sns-icons { width: 280px; margin-left: auto; margin-right: auto; display: flex; justify-content: space-between; flex-wrap: nowrap; }
        .sns-item { transition: transform 0.3s ease-in-out; }
        .sns-item img { width: 45px; height: 45px; border-radius: 5px; }
        .sns-item:hover { transform: scale(1.15); box-shadow: 0 4px 8px rgba(255, 255, 255, 0.15); }
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
        <section style="max-width:900px;margin:0 auto;" class="section-blockhistory-area" align="center">
            <h2 style="font-size:32px;margin-bottom:20px;" class="heading">会社案内</h2>
            <p style="line-height:1.8;margin-bottom:20px;">
                VEX は「ITによる世界平和の実現」を掲げ、社会課題をテクノロジーで解決する企業です。
            </p>
            <p style="line-height:1.8;">
                研究開発から社会実装までを一気通貫で担い、グローバルに事業を展開しています。
            </p>
            <section class="section-block philosophy-area">
                <h1 class="heading">理念</h1>
                <p>実現性のあるスマートシティ化を支援する</p>
            </section>
            <section class="section-block top-message-area">
                <h1 class="heading">TOPメッセージ</h1>
                <p>CEOについてこい！</p>
            </section>
                <section class="section-block history-area">
                    <h1 class="heading">沿革</h1>
                    <p class="timeline-date">2025年</p>
                        <div class="timeline-content">
                            <h2>社長のアパートで孤独に会社設立</h2>
                            <p>6畳風呂無し家賃4万3千円の築50年のボロアパートから社長1人で会社を設立。</p>
                        </div>
                    <p class="timeline-date">2028年</p>
                        <div class="timeline-content">
                            <h2>ニューヨーク支店を設立</h2>
                            <p>専門学校時代の友達の知り合いからの紹介でニューヨークに支店を設立することに成功</p>
                        </div>
                    <p class="timeline-date">2028</p>
                        <div class="timeline-content">
                            <h2>ニューヨーク証券取引所へ上場</h2>
                            <p>日本でも調子が良くなり、メディアに引っ張りだこになってる中上場を決める</p>
                        </div>
                    <p class="timeline-date">2029年</p>
                        <div class="timeline-content">
                            <h2>元クラスメイト3名入社</h2>
                            <p>就活に失敗した元クラスメイトをお情けで3名採用し、好感度も爆上がり</p>
                        </div>
                    <p class="timeline-date">2030年</p>
                        <div class="timeline-content">
                            <h2>GAFAMに並ぶ</h2>
                            <p>日本では知らないものはいないほどの大企業へ発展し、ついにGAFAMに並ぶ</p>
                        </div>
                    <p class="timeline-date">2031年</p>
                        <div class="timeline-content">
                            <h2>SDGs全て解決</h2>
                            <p>社員4名のみで、すべてのSDGsすべてのルールを解決することに成功世界平和に</p>
                        </div>
                </section>
        </section>
    </main>
            <footer>
            <h2>企業SNS</h2>
            <div class="sns-icons">
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/X.png') }}" alt="Xのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/Instagram.png') }}" alt="インスタのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/TikTok.png') }}" alt="TikTokのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/LINE.png') }}" alt="LINEのアイコン">
                </a>
            </div>
        </footer>
</body>
</html>