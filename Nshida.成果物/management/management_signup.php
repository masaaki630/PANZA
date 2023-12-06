<!DOCTYPE html>
<html lang="ja">
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
        <a href="{%controller -echo%}management_dashboard_show.php" class="back_link">≪ 戻る</a> 
    </header>
    <hr>

    <main>  
        <table>
            <?php foreach($product_list as $row): ?>
                <tr><th><?= $row['product_name']; ?></th><th><?= $row['price']; ?></th><th><input type="radio" name="select"></th></tr>
            <?php endforeach; ?>
            
        </table>
        <a class="button_signup" href="{%controller -echo%}management_product_signup_show.php">商品登録</a>
        <a class="button_edit" href="{%controller -echo%}management_product_signup_show.php">商品編集</a>
        <a class="button_delete" href="{%controller -echo%}management_completed_show.php">商品削除</a>

    </main>
    
</body>
</html>