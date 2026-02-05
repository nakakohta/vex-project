<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VEX - ITによる世界平和の実現</title>
        <style>
            /* 全体設定 */
            body {
                background-color: black;
                color: white;
                margin: 0;
                font-family: 'Helvetica Neue', Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
            }

            /* ヘッダー：背景色とナビゲーションの視認性向上 */
            header {
                background-color: #8b0000;
                padding: 30px 0;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            }

            .header-inner {
                margin: 0 auto;
                padding: 0 40px;
                max-width: 1200px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .logo a {
                display: block;
                transition: opacity 0.3s;
            }

            .logo a:hover {
                opacity: 0.8;
            }

            nav ul {
                list-style: none;
                display: flex;
                gap: 30px;
                margin: 0;
                padding: 0;
            }

            nav a {
                color: #ffffff;
                /* 黒から白に変更して読みやすく */
                font-weight: 600;
                text-decoration: none;
                font-size: 16px;
                transition: color 0.3s;
            }

            nav a:hover {
                color: #ffd900;
                /* ホバー時にロゴと同じ黄色に */
            }

            /* メインコンテンツ：余白と中央寄せ */
            main {
                max-width: 900px;
                margin: 0 auto;
                padding: 60px 20px;
                text-align: center;
            }

            .heading h2 {
                font-size: 32px;
                color: #ffd900;
                margin-bottom: 20px;
                letter-spacing: 2px;
            }

            #mission p {
                font-size: 18px;
                line-height: 1.8;
                margin-bottom: 60px;
            }

            /* ニュースセクション：テーブルの装飾 */
            .news-list-box {
                background-color: rgba(255, 255, 255, 0.05);
                padding: 30px;
                border-radius: 15px;
                display: inline-block;
                width: 100%;
                box-sizing: border-box;
            }

            table {
                margin: 0 auto;
                border-collapse: collapse;
                width: 100%;
                max-width: 700px;
            }

            tr {
                border-bottom: 1px solid #444;
            }

            tr:last-child {
                border-bottom: none;
            }

            td,
            th {
                padding: 15px;
                text-align: left;
            }

            td:first-child {
                color: #aaa;
                width: 80px;
            }

            th {
                color: #ffd900;
                font-weight: 600;
                width: 180px;
            }

            /* フッター：SNSアイコンの配置 */
            footer {
                background-color: #8B0000;
                padding: 50px 0;
                text-align: center;
                margin-top: 60px;
            }

            footer h2 {
                margin-bottom: 30px;
                color: white;
                font-size: 24px;
                display: inline-block;
                border-bottom: 2px solid white;
                padding-bottom: 8px;
            }

            .sns-icons {
                width: 280px;
                margin: 0 auto;
                display: flex;
                justify-content: space-between;
            }

            .sns-item {
                transition: transform 0.3s ease-in-out;
                display: block;
            }

            .sns-item img {
                width: 50px;
                height: 50px;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            }

            .sns-item:hover {
                transform: scale(1.2);
            }
        </style>
    </head>
    <body>
        <div class="uidesign">
            <header>
                <div class="header-inner">
                    <h1 class="logo">
                        <a href="{{ route('homepage.index') }}">
                            <img src=images/logo.png width="180" alt="VEX">
                        </a>
                    </h1>
                    <nav>
                        <ul>
                            <li><a href="{{ route('homepage.company') }}">会社案内</a></li>
                            <li><a href="{{ route('homepage.recruit') }}">採用情報</a></li>
                            <li><a href="{{ route('top') }}">商品ページ</a></li>
                        </ul>
                    </nav>
                </div>

            </header>
            <main>
                <section id="mission">
                    <div class="heading">
                        <h2>企業目標</h2>
                    </div>
                    <p>ITによる世界平和の実現</p>
                </section>
                <section id="news">
                    <div class="heading">
                        <h2>最近のニュース</h2>
                    </div>
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
                                <th>旧友3名が入社</th>
                                <td>元クラスメイトが VEX にジョイン！</td>
                            </tr>
                        </table>
                    </div>
                </section>
            </main>
            <footer>
                <h2>企業SNS</h2>
                <div class="sns-icons">
                    <a href="#" class="sns-item">
                        <img src=images/X.png alt="X">
                    </a>
                    <a href="#" class="sns-item">
                        <img src=images/Instagram.png alt="Instagram">
                    </a>
                    <a href="#" class="sns-item">
                        <img src=images/TikTok.png alt="TikTok">
                    </a>
                    <a href="#" class="sns-item">
                        <img src=images/LINE.png alt="LINE">
                    </a>
                </div>
            </footer>
        </div>
    </body>
</html>