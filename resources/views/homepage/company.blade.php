<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VEX | 会社案内</title>
        <style>
            /* 全体設定：indexと統一 */
            body {
                background-color: black;
                color: white;
                margin: 0;
                font-family: 'Helvetica Neue', Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
            }

            /* ヘッダー：indexと完全に一致 */
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
                /* 視認性の高い白に変更 */
                font-weight: 600;
                text-decoration: none;
                font-size: 16px;
                transition: color 0.3s;
            }

            nav a:hover {
                color: #ffd900;
                /* ロゴと同じ黄色に */
            }

            /* メインコンテンツ：余白とレイアウトの統一 */
            main {
                max-width: 900px;
                margin: 0 auto;
                padding: 80px 20px;
                /* indexより少し多めの余白で読みやすく */
                text-align: left;
                /* 文章は左寄せで見やすく */
            }

            h2 {
                font-size: 32px;
                color: #ffd900;
                margin-bottom: 30px;
                letter-spacing: 2px;
                border-left: 5px solid #8b0000;
                /* アクセントに赤のラインを追加 */
                padding-left: 15px;
            }

            p {
                font-size: 18px;
                line-height: 2;
                /* 行間を広くして読みやすく */
                margin-bottom: 25px;
                color: #f0f0f0;
            }

            /* フッター：簡易版を配置（必要に応じて） */
            footer {
                background-color: #1a1a1a;
                padding: 40px 0;
                text-align: center;
                font-size: 14px;
                color: #888;
                margin-top: 80px;
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
    <header>
        <div class="header-inner">
            <h1 class="logo">
                <a href="{{ route('homepage.index') }}">
                    <img src=../images/logo.png width="200" height="100" alt="VEX">
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
                    <img src=../images/X.png alt="Xのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src=../images/Instagram.png alt="インスタのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src=../images/TikTok.png alt="TikTokのアイコン">
                </a>
                <a href="#" class="sns-item">
                    <img src=../images/LINE.png alt="LINEのアイコン">
                </a>
            </div>
        </footer>
</body>
</html>