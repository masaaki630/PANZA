<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側企業一覧</title>
    <link href="destyle.css" rel="stylesheet">
    <link href="System_shohin_all.css" rel="stylesheet">
</head>
<body>
    <header>
        管理画面
        <a href="">ログアウト</a>
    </header>
    <main>
    <div class="container">
        <div class="title-box">
            <p>企業一覧</p>
            <a href="">企業一覧へ</a>
        </div>
        <hr>
        <table>
            <tr><th>商品番号</th><th>商品名</th><th>商品説明</th><th>カテゴリ名</th><th>作成日</th><th>更新日</th><th>売り上げ</th><th>操作</th></tr>
            <?php foreach($sholist as $row): ?>
                <tr>
                    <td><?= $row['product_id']; ?></td>
                    <td><?= $row['product_name']; ?></td>
                    <td><?= $row['product_explanation']; ?></td>
                    <td><?= $row['category_name']; ?></td>
                    <td><?= $row['product_created']; ?></td>
                    <td><?= $row['product_updated']; ?></td>
                    <td><?= $row['product_uriage']; ?></td>
                    <td>操作</td>
                </tr>
            <?php endforeach; ?>
        </table>     
    </div>
    </main>

    <div class="footer">ABCC_SD2F_T1_Sep12</div>
</body>
</html>