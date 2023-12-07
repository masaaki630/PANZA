<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー側商品画面</title>
    <link href="./css/destyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./css/user_shohin.css">
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script defer src="./js/user_shohin.js"></script>
    <script defer src="./js/HeartIconChange.js"></script>
</head>
<body>
    <header>
        <span class="title">PANZA</span>
    </header>
    <main>
        <div class="shohin_img">
            <ul class="slide-items">
                <?php foreach($shohin_img as $row): ?>
                    <!-- 表示する商品の画像を商品詳細テーブルから持ってくる -->
                    <li><img src="./img/huku1.jpg"></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <table>
            <tr>
                <th>size</th>
                <td><input type="radio" name="size" class="radio"></td><th>S</th>
                <td><input type="radio" name="size" class="radio"></td><th>M</th>
                <td><input type="radio" name="size" class="radio"></td><th>L</th>
                <td><input type="radio" name="size" class="radio"></td><th>XL</th>
            </tr>
        </table>
        </div>
        <div class="shohin_detail">
            <div class="shohin_name">
                <p>BLAND<!-- ブランド名をshohinテーブルから持ってくる -->
                <br>
                ・・・商品名・・・<!-- 商品名をshohinテーブルから持ってくる -->
                </p>
            </div>
            <div class="shohin_price">
                <p>￥PRICE<!-- 商品の値段をshohinテーブルから持ってくる --></p>
                    <div class="shohin_price_taxincluded">
                        <p>税込</p>
                        <!-- この税込のdivは多分レイアウト調整のためだと思う。触らぬ神に祟りなし -->
                    </div>
            </div>
            <div class="heart-container"><i class="fa-regular fa-heart"></i></div>
            <div class="shohin_explanation">
                <p>アイテム説明<br>
                aaaaaa<!-- 商品説明をshohinテーブルから持ってくる --></p>
            </div>
        </div>
        
        <div class="boxes">
            <a href="{%controller -echo%}user_main_show.php">
                <div class="box">
                    <p>戻る</p>
                </div>
            </a>
            <a href="{%controller -echo%}user_cart_show.php">
                <div class="boxs">
                    <p>カートに入れる</p>
                </div>
            </a>
        </div>

        <p>同じブランドの商品</p>
        <div class="yokonarabi">
            <?php foreach($samebrand_shohin as $row): ?>
                <a href="{%controller -echo%}user_shohin_show.php">
                    <div class="same_brand_shohin">
                        <img src="img/huku2.jpg" class="border">
                        <p>bland・・・
                            <!-- 表示している商品のブランド名をshohinテーブルから持ってくる -->
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>