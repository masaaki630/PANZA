<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧</title>
    <link rel="stylesheet" href="./css/destyle.css">
    <link rel="stylesheet" href="./css/signup.css">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <p class="header_name">商品一覧</p>
        <a href="back" class="back_link" id="back">≪ 戻る</a> 
    </header>
    <hr>

    <main>  
        <a class="button" href="#">すべて選択</a>
        <table>
            <?php foreach($product_list as $row): ?>
                <tr><th><?= $row['product_name']; ?></th><th><?= $row['price']; ?></th><th><input type="radio" name="select"></th></tr>
            <?php endforeach; ?>
            
        </table>
        <a class="button_signup" href="management_product_signup.html">商品登録</a>
        <a class="button_edit" href="#">商品編集</a>
        <a class="button_delete" href="#">商品削除</a>

    </main>
    
</body>
</html>