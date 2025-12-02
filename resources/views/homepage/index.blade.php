<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEX - ITによる世界平和の実現</title>
    <style>
        body { background-color: black; color: white; }
        header { background-color: #8b0000; padding: 40px 0; }
        .header-inner { margin: 0 40px; max-width: 1200px; display: flex; align-items: center; justify-content: space-between; }
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
    <div class="uidesign">
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

        <main>
            <section id="mission">
                <span class="heading"><h2>企業目標</h2></span>
                <p>ITによる世界平和の実現</p>
            </section>

            <section id="news">
                <span class="heading"><h2>最近のニュース</h2></span>
                <div class="news-list-box">
                    <table>
                        <tr>
                            <td>2031</td>
                            <th>SDGs全て解決</th>
                            <td>SDGs の16ゴールを単独で達成。</td>
                        </tr>
                        <tr>
                            <td>2030</td>
                            <th>GAFAMに並ぶ</th>
                            <td>Google や Apple と肩を並べる評価を獲得。</td>
                        </tr>
                        <tr>
                            <td>2029</td>
                            <th>元クラスメイト3名入社</th>
                            <td>旧友3名が VEX にジョイン！</td>
                        </tr>
                    </table>
                </div>
            </section>
        </main>

        <footer>
            <h2>企業SNS</h2>
            <div class="sns-icons">
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/X.png') }}" alt="Xのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/インスタ.png') }}" alt="インスタのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/TikTok.png') }}" alt="TikTokのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src="{{ asset('images/LINE.png') }}" alt="LINEのアイコン">
                </a>
            </div>
        </footer>
    </div>
</body>
</html>