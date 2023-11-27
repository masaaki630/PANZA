<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側商品詳細</title>
    <link href="destyle.css" rel="stylesheet">
    <link href="System_shohin_detail.css" rel="stylesheet">
</head>
<body>
    <div class="header">
        管理画面
        <a href="" value="ログアウト">ログアウト</a>
    </div>
    <main>
    <div class="container">
        <div class="title-box">
            <p>商品詳細</p>
            <a href="">商品一覧へ</a>
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
    <div class="footer">ABCC_SD2F_T1_Sep12</div>
</body>
</html>