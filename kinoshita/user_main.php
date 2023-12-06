<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザー側メインページ</title>
    <link href="destyle.css" rel="stylesheet">
    <link href="user_main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="title">PANZA</div>
    </header>
    <main>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="boxes">
            <a href="{%controller -echo%}brand_search_show.php">
                <!-- URL仮、ファイルがない -->
                <div class="box">
                    <p>ブランドから探す</p>
                </div>
            </a>
            <a href="{%controller -echo%}category_search_show.php">
                <!-- URL仮、ファイルがない -->
                <div class="box">
                    <p>カテゴリから探す</p>
                </div>
            </a>
        </div>

        <p>チェックしたアイテム</p>
        <div class="yokonarabi">
            <?php foreach($shohin as $row): ?>
                <div class="checked_item"> <!-- 商品一個を表示するdiv -->
                    <div class="checked_img">
                        <a href="{%controller -echo%}user_shohin_show.php">
                            <img src= <?= $row['product_image_path']; ?>>
                        </a>
                    </div>
                    <div class="checked_shohin_name">
                        <a href="{%controller -echo%}user_shohin_show.php">
                            <span>bland</span>
                        </a>
                    </div>
                    <div class="checked_shohin_price">
                        <span>￥10,000</span>
                        <span class="heart-container">
                            <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



        <p>お気に入りのアイテム</p>
        <div class="yokonarabi">
            <?php foreach($shohin as $row): ?>
                <div class="favorite_item"> <!-- 商品一個を表示するdiv -->
                    <div class="favorite_img">
                        <a href="{%controller -echo%}user_shohin_show.php">
                            <img src= <?= $row['product_image_path']; ?> >
                        </a>
                    </div>
                    <div class="favorite_shohin_name">
                        <a href="{%controller -echo%}user_shohin_show.php">
                            <span>bland</span>
                        </a>
                    </div>
                    <div class="favorite_shohin_price">
                        <span>￥10,000</span>
                        <span class="heart-container">
                            <i class="fa-regular fa-heart"></i>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        
        <!-- ハンバーガーメニューの中身 -->
        <div class="slide_menu hidden">
            <h1>メニュー画面</h1>
            <a href="{%controller -echo%}user_favorite_show.php">
                <div class="user_dashboard">
                    <p>お気に入り商品一覧</p>
                </div>
            </a>
            <a href="{%controller -echo%}user_cart_show.php">
                <div class="user_dashboard">
                    <p>カートを見る</p>
                </div>
            </a>
            <a href="{%controller -echo%}user_member_information_show.php">
                <div class="user_dashboard">
                    <p>会員画面</p>
                </div>
            </a>
            <a href="{%controller -echo%}user_main_show.php">
                <!-- ログアウト後はメインページに飛ぶように書いたけど違ったら変更お願いします -->
                <div class="user_dashboard">
                    <p>ログアウト</p>
                </div>
            </a>
            <a href="{%controller -echo%}user_main_show.php">
                <div class="user_dashboard">
                    <p>ホームに戻る</p>
                </div>
            </a>
        </div>
        <div class="hidden background"></div>
    </main>
    <script src="js/hamburger.js"></script>
    <script src="js/HeartIconChange.js"></script>
</body>
</html>

<!-- 
　　　　　　　　　 　 　 ,　-‐;ｚ..__　　　　　＿丿
　　　　　　　 ／￣ﾞヽ′　ﾆ‐- 、＼　　＼　　　ところがどっこい
　　　　　　　Ｚ´// ,ﾍ.∧ ヽ　＼ヽ　ゝ　　 ヽ　　　‥‥‥‥
　　　　　　　/, / ,ﾘ 　 vﾍ ｌヽ＼ヽヽ.|　 　 ノ　　夢じゃありません
　　　　　　　/ｲﾙ_-､ij~　 ﾊにヽ,,＼`|　＜　　　　　　‥‥‥‥！
.　　　　　　　 N⌒ヽヽ　/／￣ﾘ:| l l |　　 ｀)
　 　 　 　 　 　 ﾄ､_e.〉u ' ｅ_ ノﾉ |.l l |　 ∠.　　　現実です
　　　　　　　 　 |､＜ ､ ij　_,¨､イ||ト､| 　 　 ヽ　　　　　　‥‥‥！
.　　　　 　 　 　 |ドｴｴエ「-┴''´|.|L八　　　ﾉ -､　　　これが現実‥！
　　　 　 　 　 　 l.ﾋ_ー-r-ー'スｿ | l トゝ､.__　　 | ,. - ､
　　　　_,,.　-‐ ''"ﾄヽｴｴｴエ!ゝ'´.ｲ i l;;;;:::::::::::`::ｰ/
　　　ﾊ:::::::::::::::::::::| l＼ｰ一_v~'´ j　,1;;;;;;:::::::::::::::::::
.　　/:::;l::::::::::::::::::::;W1;;;下、　／lﾙ' !;;;;;;;;;::::::::::::::::
　 /:::::;;;ｌ:::::::::::::::::;;;;;;;;;;;;;;;|: :Ｘ: : : : : |;;;;;;;;;;;;;;::::::::::::
　/:::::;;;;;;|:::::::::::::::;;;;;;;;;;;;;;;;|/: : >､: : :|;;;;;;;;;;;;;;;::::::::::: 
-->
