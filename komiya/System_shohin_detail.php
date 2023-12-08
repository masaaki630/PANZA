<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側商品詳細</title>
    <link rel="stylesheet" href="./Css/destyle.css">
    <link rel="stylesheet" href="./Css/System_shohin_detail.css">
</head>
<body>
    <header>
        管理画面
        <a href="{%controller -echo%}logout.php" id="logout">ログアウト</a>
    </header>
    <main>
    <div class="container">
        <div class="title-box">
            <p>商品詳細</p>
            <a href="{%controller -echo%}System_shohin_detail_show.php">商品一覧へ</a>
        </div>
        <hr>
        <table>
            <tr><th>サイズ</th><th>価格</th><th>在庫数</th><th>最低在庫数</th><th>作成日</th><th>更新日</th><th>販売数</th><th>売上</th></tr>
            <?php foreach($details as $row): ?>
                <tr>
                    <td><?= $row['size']; ?></td>
                    <td><?= $row['price']; ?></td>
                    <td><?= $row['stock']; ?></td>
                    <td><?= $row['min_stock']; ?></td>
                    <td><?= $row['product_size_created']; ?></td>
                    <td><?= $row['product_size_updated']; ?></td>
                    <td><?= $row['purchase_number']; ?></td>
                    <td><?= $row['shosai_uriage']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="shohin_img">
            <?php foreach($images as $row): ?>
                <img src= <?= $row['product_image_path']; ?> class="border">; 
            <?php endforeach; ?>
        </div>
    </div>
    </main>
    <footer>ABCC_SD2F_T1_Sep12</footer>
</body>
</html>