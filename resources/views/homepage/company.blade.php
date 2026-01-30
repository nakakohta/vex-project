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
        </style>
    </head>
    <body>
        <div class="uidesign">
            <header>
                <div class="header-inner">
                    <h1 class="logo">
                        <a href="{{ route('homepage.index') }}">
                            <img src="{{ asset('images/logo.png') }}" width="180" alt="VEX">
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
                <section>
                    <h2>会社案内</h2>
                    <p> VEX は「ITによる世界平和の実現」を掲げ、社会課題をテクノロジーで解決する企業です。 </p>
                    <p> 研究開発から社会実装までを一気通貫で担い、最先端のAI技術やブロックチェーンを活用した セキュアなインフラ構築など、グローバルに事業を展開しています。 </p>
                    <p> 私たちは、技術が人々の対立を解消し、より豊かで平和な社会を築くための 架け橋になると信じています。 </p>
                </section>
            </main>
            <footer>
                <p>&copy; 2026 VEX Inc. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>