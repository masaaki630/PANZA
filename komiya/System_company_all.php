<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側企業一覧</title>
    <link rel="stylesheet" href="./Css/destyle.css">
    <link rel="stylesheet" href="./Css/System_company_all.css">
</head>
<body>
    <header>
        管理画面
        <a href="{%controller -echo%}logout.php" id="logout">ログアウト</a>
    </header>
    <main>
        <div class="container">
            <div class="title-box">
                <p>企業一覧</p>
                <a href="{%controller -echo%}System_dashboard_show.php">ダッシュボードへ</a>
            </div>
            <hr>
            <table>
                <tr><th>企業ID</th><th>企業名</th><th>企業住所</th><th>売り上げ</th></tr>
                <?php foreach($comlist as $row): ?>
                    <tr>
                        <td><?= $row['company_id']; ?></td>
                        <td><a href=""><?= $row['company_name']; ?></td>
                        <td><?= $row['company_place']; ?></td>
                        <td><?= $row['company_uriage']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
    
    

    <footer>ABCC_SD2F_T1_Sep12</footer>
</body>
</html>