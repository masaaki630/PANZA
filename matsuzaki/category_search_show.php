<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品カテゴリ検索画面</title>
    <link href="./css/destyle.css" rel="stylesheet">
    <link href="./css/category_search_show.css" rel="stylesheet">
</head>
<body>
    <header>
        <span class="title">PANZA</span>
    </header>
    <main>
            <p class="select">カテゴリー選択</p>
                <table class="category_all">
                    <?php foreach($category as $row): ?>
                    <tr class="category_vertical">
                        <td class="category_width">
                            <a href="{%controller -echo}user_search_product_show.php" class="category_link"><input type="hidden" name="<?= $row['category_id']; ?>"><?= $row['category_name']; ?></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                    <div class="back">
                        <a href="{%controller -echo%}user_main_show.php">
                            <div class="box">
                                <p>戻る</p>
                            </div>
                        </a>
                    </div>
    </main>
</body>
</html>