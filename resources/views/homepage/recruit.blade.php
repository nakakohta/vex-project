<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEX | 採用情報</title>
    <style>
        body { background-color: black; color: white; }
        header { background-color: #8b0000; padding: 40px 0; }
        .header-inner { margin: 0 40px; max-width: 1200px; display: flex; align-items: center; justify-content: space-between; }
        nav ul { list-style: none; display: flex; gap: 40px; }
        nav a { color: black; font-weight: 500; text-decoration: none; }
        .heading { font-size: 25px; text-align: center; color: #ffd900; }
        table { border-collapse: collapse; }
        th { background-color: #ada8a8; color: #000000; width: 300px; height: 80px; border: 1px solid #333; font-size: 20px; }
        td { width: 800px; height: 80px; border: 1px solid #333; font-size: 20px; }
        .ceo-com { color: #8b0000; font-weight: bold; }
        .monny { color: #e6b422; }
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

    <span class="heading"><h1>求人情報</h1></span>

    <div align="center">
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
                    <td>
                        向上心がある人<br>
                        根性が強い人<br>
                        平和主義の人<br>
                        思想がSDGsに準拠した人<br>
                        1日程度は徹夜してもいい人<br>
                        <span class="ceo-com">社長の言うことに従う人(絶対服従)</span>
                    </td>
                </tr>
                <tr>
                    <th>福利厚生</th>
                    <td>
                        サマーバケーションあり<br>
                        完全週休三日制<br>
                        交通費全額支給<br>
                        資資格取得支援制度<br>
                        住宅手当<br>
                        賞与あり(2.5ヶ月分/回を年2回)<br>
                        会社積立金有(10000円/月)<br>
                        カフェテリアプラン<br>
                        社用ジャンボ機
                    </td>
                </tr>
                <tr>
                    <th>給与</th>
                    <td><span class="monny">言い値</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>