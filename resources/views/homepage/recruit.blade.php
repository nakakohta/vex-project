<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VEX | 採用情報</title>
        <style>
            /* 全体設定：他のページと統一 */
            body {
                background-color: black;
                color: white;
                margin: 0;
                font-family: 'Helvetica Neue', Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
            }

            /* ヘッダー：デザイン統合 */
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
                font-weight: 600;
                text-decoration: none;
                font-size: 16px;
                transition: color 0.3s;
            }

            nav a:hover {
                color: #ffd900;
            }

            /* メインコンテンツ */
            main {
                max-width: 1000px;
                margin: 0 auto;
                padding: 60px 20px;
                text-align: center;
            }

            .heading h1 {
                font-size: 32px;
                color: #ffd900;
                margin-bottom: 40px;
                letter-spacing: 2px;
            }

            /* テーブルの装飾：ダークテーマ最適化 */
            .table-container {
                background-color: rgba(255, 255, 255, 0.05);
                padding: 40px;
                border-radius: 15px;
                display: inline-block;
                width: 100%;
                box-sizing: border-box;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin: 0 auto;
                color: #f0f0f0;
            }

            th {
                background-color: rgba(139, 0, 0, 0.3);
                /* ヘッダー色の薄い版 */
                color: #ffd900;
                width: 250px;
                padding: 20px;
                border: 1px solid #444;
                font-size: 18px;
                text-align: center;
            }

            td {
                padding: 20px;
                border: 1px solid #444;
                font-size: 18px;
                text-align: left;
                line-height: 1.6;
            }

            /* 特別な文字装飾 */
            .ceo-com {
                color: #ff4444;
                font-weight: bold;
                display: block;
                margin-top: 10px;
                border-top: 1px dashed #666;
                padding-top: 10px;
            }

            .monny {
                color: #ffd900;
                font-size: 24px;
                font-weight: bold;
                text-shadow: 0 0 10px rgba(255, 217, 0, 0.5);
            }

            footer {
                background-color: #1a1a1a;
                padding: 40px 0;
                margin-top: 60px;
                color: #888;
            }
        </style>
    </head>
    <body>
        <div class="uidesign">
            <header>
                <div class="header-inner">
                    <h1 class="logo">
                        <a href="{{ route('homepage.index') }}">
                            <img src=../images/logo.png width="180" alt="VEX">
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
                <section class="heading">
                    <h1>求人情報</h1>
                </section>
                <div class="table-container">
                    <table>
                        <tbody>
                            <tr>
                                <th>雇用形態</th>
                                <td>正社員</td>
                            </tr>
                            <tr>
                                <th>職種</th>
                                <td>インフラエンジニア</td>
                            </tr>
                            <tr>
                                <th>募集要項</th>
                                <td> ・向上心がある人<br> ・根性が強い人<br> ・平和主義の人<br> ・思想がSDGsに準拠した人<br> ・1日程度は徹夜してもいい人<br>
                                    <span class="ceo-com">※社長の言うことに従う人（絶対服従）</span>
                                </td>
                            </tr>
                            <tr>
                                <th>福利厚生</th>
                                <td> ・サマーバケーションあり / 完全週休三日制<br> ・交通費全額支給 / 資格取得支援制度 / 住宅手当<br> ・賞与あり（2.5ヶ月分/回を年2回）<br>
                                    ・会社積立金有（10,000円/月）<br> ・カフェテリアプラン / 社用ジャンボ機 </td>
                            </tr>
                            <tr>
                                <th>給与</th>
                                <td><span class="monny">言い値</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
            <footer style="text-align: center;">
                <p>&copy; 2026 VEX Inc. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>