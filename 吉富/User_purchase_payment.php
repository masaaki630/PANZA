<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="destyle.css">
    <link rel="stylesheet" href="User_purchase_payment.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入者情報確認・支払い方法選択</title>
</head>
<body>
    <header>
        <span class="System_name">PANZA</span>
    </header> 
    
    <p class="todo">お届け先住所確認</p>

    <?php foreach($member_information as $row): ?>
                
                    <p>〒<?= $row['post_code']; ?></p>
                    <p><?= $row['prefectures']; ?>
                    <?= $row['city']; ?>
                    <?= $row['street_address']; ?></p>
                    <p><?= $row['building_name']; ?></p>
                
    <?php endforeach; ?>
        
        <a href="">
            <div class="user_address_edit">編集</div>
        </a>

    <p class="todo">お支払い方法選択</p>
    <form action="#" method="post">
        <fieldset class="radio-001">
            <div class="user_credit">
                <div class="payment">
                    <label>
                        <input type="radio" name="shiharai" id="credit">クレジットカード
                    </label>
                </div>
                <div class="card">
                    <a href="#">カード情報入力></a>
                </div>
            </div>
            <div class="user_cash">
                <label>
                    <input type="radio" name="shiharai" id="collect">着払い
                </label>
            </div>
            <div class="user_cash">
                <label>
                    <input type="radio" name="shiharai" id="convenience">コンビニ支払い
                </label>
            </div>
        </fieldset>
    <div class="user_completed">
        <a href="#">購入完了</a> 
    </div>
    </form>
</body>
</html>
