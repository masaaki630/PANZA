<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>企業側管理画面</title>
    <link href="destyle.css" rel="stylesheet">
    <link href="management_image_up.css" rel="stylesheet">
</head>
<body>
    <header>
        画像アップロード
        <a href="" value="戻る">＜　戻る</a>
    </header>
    <main>
    <div class="container">
        <div class="upload">
            <p>
                <input type="file" value="画像選択" class="file-upload">
            </p>
        </div>
        <table>
            <tr>
                <td>アップロードした写真</td>
                <td>削除</td>
            </tr>
            <tr>
                <td>アップロードした写真</td>
                <td>削除</td>
            </tr>
            <tr>
                <td>アップロードした写真</td>
                <td>削除</td>
            </tr>
        </table> 
        <div class="add">
            <a href="{%controller -echo%}management_completed_show.php">
                <div class="box">
                    <p>アップロード</p>
                </div>
            </a>
        </div>
    </div>
    </main>

    <footer>ABCC_SD2F_T1_Sep12</footer>
</body>
</html>