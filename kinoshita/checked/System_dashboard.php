<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>システム側ダッシュボード</title>
    <link rel="stylesheet" href="destyle.css">
    <link rel="icon" href="favicon.ico">
    <link href="System_dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h1>管理画面</h1>
        <a href="{%controller -echo%}logout.php" id="logout">ログアウト</a>    </header>

    <main>
        <div class="container">
            <div class="title-box">
                <h3>ダッシュボード</h3>
            </div>
            <hr>
            <div class="boxes">
                <a href="System_company_all.html" class="box">
                    <i class="fa-solid fa-building icon"></i>
                    <p>企業一覧</p>
                </a>
                <a href="" class="box">
                    <i class="fa-solid fa-person icon"></i>
                    <p>会員情報一覧</p>
                </a>
                <a href="System_manage.html" class="box">
                    <i class="fa-solid fa-gear icon"></i>
                    <p>システム管理</p>
                </a>
                <a href="" class="box">
                    <i class="fa-regular fa-circle-check icon"></i>
                    <p>新規企業承認</p>
                </a>
            </div>
        </div>
    </main>

    <footer class="footer">
            <p>ABCC_SD2F_T1_Sep12</p>
    </footer>
</body>
</html>