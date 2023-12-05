<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>変更確認画面</title>
    <link rel="stylesheet" href="./css/destyle.css">
    <link rel="stylesheet" href="./css/completed.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <p class="header_name">確認画面</p>
        <a href="{%controller -echo%}management_product_signup_show.php" class="back_link">≪ 戻る</a> 
    </header>
    <hr>

    <main>  
       <p class="letter">商品を登録します</p>
       <a class="button" href="">確認</a>
       <!-- ここのhrefどこに遷移するのか不明、登録完了した後どこに飛ぶ？ -->
    </main>
    
</body>
</html>