<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員情報画面</title>
    <link href="./css/destyle.css" rel="stylesheet">
    <link href="./css/user_member_information.css" rel="stylesheet">
</head>
<body>
    <header>
        <span class="title">PANZA</span>
    </header>
    <main>
        <form action="" method="post" class="center">
            <input type="hidden" name="member_id">
                <div class="form-container">
                    <p>氏名（セイ）</p>
                    <input type="text" name="member_first_name">
                </div>
                <div class="form-container">
                    <p>氏名（メイ）</p>
                    <input type="text" name="member_last_name">
                </div>
                <div class="form-container">
                    <p>電話番号</p>
                    <input type="tel" name="phone">
                </div>
                <div class="form-container">
                    <p>生年月日</p>
                    <input type="date" name="birth">
                </div>
                <div class="form-container">
                    <p>郵便番号</p>
                    <input type="text" name="post_code">
                </div>
                <div class="form-container">
                    <p>都道府県</p>
                    <input type="text" name="prefectures">
                </div>
                <div class="form-container">
                    <p>市区町村</p>
                    <input type="text" name="city">
                </div>
                <div class="form-container">
                    <p>番地</p>
                    <input type="text" name="street_address">
                </div>
                <div class="form-container">
                    <p>建物名（任意）</p>
                    <input type="text" name="building_name">
                </div>
                <div class="form-container">
                    <p>メールアドレス</p>
                    <input type="email" name="member_email">
                </div>
                <div class="form-container">
                    <p>パスワード</p>
                    <input type="password" name="member_password">
                </div>
                <div class="inputInfomation button-container">
                    <a href="{%controller -echo%}user_main_show.php" class="button">
                      <p>戻る</p>
                    </a>
                    <input type="submit" class="button" value="編集">
                </div>
        </form>
    </main>
</body>
</html>