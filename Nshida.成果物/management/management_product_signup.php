<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="./css/destyle.css">
    <link rel="stylesheet" href="./css/puroduct_signup.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <p class="header_name">商品登録</p>
        <a href="" class="back_link" id="back">≪ 戻る</a> 
    </header>
    <hr>

    <main>  
        <button class="button_chose">画像を選択</button>
        <div class="shosai">
            <div class="image">
            <img class="img" src="./image/sample1.jpg">
            <img class="img" src="./image/sample2.jpg">
            </div>
            <table>
                <?php foreach($product_page as $row): ?>
                    <tr><th>ブランド</th><th><?= $row['company_name']; ?></th>
                    <tr><th>商品名</th><th><?= $row['product_name']; ?></th>
                    <tr><th>商品説明</th><th><?= $row['product_explanation']; ?></th>
                    <tr><th>サイズ</th><th><?= $row['size']; ?></th>
                    <tr><th>カテゴリ</th><th><?= $row['category_name']; ?></th>
                <?php endforeach; ?>
            </table>
        </div>
        <a class="button_signup" href="">登録</a>
    </main>
    
</body>
</html>