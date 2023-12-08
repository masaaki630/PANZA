<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側変更確認画面</title>
    <link rel="stylesheet" href="destyle.css">
    <link rel="stylesheet" href="System_change.css">
</head>
<body>
    <header>
        管理画面
        <a href="{%controller -echo%}logout.php" id="logout">ログアウト</a>
    </header>
    <main>
        <div class="container">
            <div class="title-box">
                <a href="">戻る</a>
            </div>
            <hr>
            <div class="check">
                <p>以下の情報で更新します。<br>
                よろしいですか?
                </p>
            </div>
            <table>
                <?php foreach($system as $row): ?>
                    <tr><td>管理者名:</td><td><?= $row['system_name']; ?></td></tr>
                    <tr><td>権限レベル：</td><td><?= $row['admin_level']; ?></td></tr>
                    <tr><td>管理者ID</td><td><?= $row['system_login_id']; ?></td></tr>
                <?php endforeach; ?>
            </table>
            <a href="" class="changebutton">
                <div class="box">
                    <p>削除</p>
                </div>
            </a>
        </div> 
    </main>

    <footer>ABCC_SD2F_T1_Sep12</footer>
</body>
</html>