<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>企業側在庫数管理画面</title>
    <link href="destyle.css" rel="stylesheet">
    <link href="management_stock.css" rel="stylesheet">
    <script defer src="./js/management_stock.js"></script>
</head>
<body>
    <header>
        在庫数管理
        <a href="{%controller -echo%}management_dashboard_show.php" value="戻る">＜　戻る</a>
    </header>
    <main>
    <div class="container" id="app">
        <div class="upload">
            <p>
                <input type="text" class="shohin_kensaku" placeholder="商品名を入力してください">
            </p>
        </div>
        <table>
            <tr>
                <td>
                    <div class="shohin">
                        <span>商品名</span>
                        <span>￥10000</span>
                    </div>
                </td>
                <td class="count_cell">
                    <div class="stock_count">
                        <span><input type="button" value="＋" onclick="incrementCount(this)"></span>
                        <span>1</span>
                        <span><input type="button" value="－" onclick="decrementCount(this)"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="shohin">
                        <span>商品名</span>
                        <span>￥10000</span>
                    </div>
                </td>
                <td class="count_cell">
                    <div class="stock_count">
                        <span><input type="button" value="＋" onclick="incrementCount(this)"></span>
                        <span>1</span>
                        <span><input type="button" value="－" onclick="decrementCount(this)"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="shohin">
                        <span>商品名</span>
                        <span>￥10000</span>
                    </div>
                </td>
                <td class="count_cell">
                    <div class="stock_count">
                        <span><input type="button" value="＋" onclick="incrementCount(this)"></span>
                        <span>1</span>
                        <span><input type="button" value="－" onclick="decrementCount(this)"></span>
                    </div>
                </td>
            </tr>
        </table> 
        <div class="update">
            <a href="{%controller -echo%}_show.php">
                  <!-- ここの遷移先不明、在庫数更新してダッシュボードに戻る？ -->
                <div class="box">
                    <p>在庫数更新</p>
                </div>
            </a>
        </div>
    </div>
    </main>

    <footer>ABCC_SD2F_T1_Sep12</footer>
</body>
</html>