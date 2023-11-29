<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側削除確認画面</title>
    <link href="destyle.css" rel="stylesheet">
    <link href="System_delete.css" rel="stylesheet">
</head>
<body>
    <header>
        管理画面
        <a href="">ログアウト</a>
    </header>
    <main>
        <div class="container">
            <div class="title-box">
                <a href="">戻る</a>
            </div>
            <hr>
            <div class="check">
                <p>以下の情報で削除します。<br>
                よろしいですか?
                </p>
            </div>
            <table>
                <?php foreach($system as $row): ?>
                    <tr><td>管理者名:</td><td><?= $row['system_name']; ?></td></tr>
                    <tr><td>権限レベル：</td><td><?= $row['system_level']; ?></td></tr>
                    <tr><td>管理者ID</td><td><?= $row['system_id']; ?></td></tr>
                <?php endforeach; ?>
                
            </table>
            <a href="" class="deletebutton">
                <div class="box">
                    <p>削除</p>
                </div>
            </a>
        </div> 
    </main>

    <footer>ABCC_SD2F_T1_Sep12</footer>
</body>
</html>