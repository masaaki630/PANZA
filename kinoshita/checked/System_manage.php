<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側管理画面</title>
    <link href="destyle.css" rel="stylesheet">
    <link href="System_manage.css" rel="stylesheet">
</head>
<body>
    <header>
        管理画面
        <a href="{%controller -echo%}logout.php" id="logout">ログアウト</a>    </header>
    <main>
    <div class="container">
        <div class="title-box">
            <p>管理者一覧</p>
            <a href="System_dashboard.html">ダッシュボードへ</a>
        </div>
        <hr>
        <div class="add">
            <a href="System_shinkitouroku.html" class="box box-new">
                <p>新規登録</p>
            </a>
        </div>
        <table>
            <tr><th>管理者番号</th><th>管理者名</th><th>権限レベル</th><th>管理者ID</th><th>操作</th></tr>
            <?php foreach($System as $row): ?>
            <tr>
                <td><?= $row['system_id']; ?></td>
                <td><?= $row['system_name']; ?></td>
                <td><?= $row['admin_level']; ?></td>
                <td><?= $row['system_login_id']; ?></td>
                <td>
                    <a href="System_henkou.html">
                        <div class="box box-update">
                        <p>変更</p>
                        </div>
                    </a>
                    <a href="System_sakujyo.html">
                        <div class="box box-delete">
                        <p>削除</p>
                        </div>
                    </a>
                </td>
            <?php endforeach; ?>
            </tr>
            <!-- <tr>
                <td>2</td>
                <td>YokoKobuchi</td>
                <td>最高</td>
                <td>WatashiHaSaikyo</td>
                <td>
                    <a href="System_henkou.html">
                        <div class="box box-update">
                        <p>変更</p>
                        </div>
                    </a>
                    <a href="System_sakujyo.html">
                        <div class="box box-delete">
                        <p>削除</p>
                        </div>
                    </a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>SD2FtoYukainaNakama</td>
                <td>中</td>
                <td>Text</td>
                <td>
                    <a href="System_henkou.html">
                        <div class="box box-update">
                        <p>変更</p>
                        </div>
                    </a>
                    <a href="System_sakujyo.html">
                        <div class="box box-delete">
                        <p>削除</p>
                        </div>
                    </a>
                </td>
            </tr> -->
        </table>     
    </div>
    </main>

    <footer class="footer">ABCC_SD2F_T1_Sep12</footer>
</body>
</html>