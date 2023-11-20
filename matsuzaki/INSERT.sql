[企業]
<商品登録/編集>
-- Products テーブルへのデータ挿入
INSERT INTO Products (product_name, product_explanation, category_id, company_id, product_created, product_updated)
VALUES ($product_name, $product_explanation, DEFAULT, DEFAULT, NOW(), NOW());

-- 取得した product_id を変数に格納
SET @last_product_id = LAST_INSERT_ID();

-- Product_Sizes テーブルへのデータ挿入
INSERT INTO Product_Sizes (product_id, size, price, stock, min_stock, purchase_number, product_size_created, product_size_updated)
VALUES (@last_product_id, $size, $price, $stock, $min_stock, $purchase_number, NOW(), NOW());

-- Category テーブルへのデータ挿入
INSERT INTO Category (category_name, sex_category_name)
VALUES ($category_name, $sex_category_name);

-- 取得した category_id を変数に格納
SET @last_category_id = LAST_INSERT_ID();

-- Company テーブルへのデータ挿入
INSERT INTO Company (company_name, company_place, company_email, company_password)
VALUES ($company_name, $company_place, $company_email, $company_password);

-- 取得した company_id を変数に格納
SET @last_company_id = LAST_INSERT_ID();

-- Product_Images テーブルへのデータ挿入
INSERT INTO Product_Images (product_id, product_image_path)
VALUES (@last_product_id, $product_image_path);


-------------------------------------------------------------------------------------
[管理]
<新規登録画面>
INSERT INTO System(system_name,admin_level,system_login_id,system_password)
VALUES($system_name,$admin_level,$system_login_id,$system_password);

-------------------------------------------------------------------------------------
[ユーザー]
<パスワード登録画面>*IDは間違いにより除外*
INSERT INTO Member_Information(member_e_mail,member_password)
VALUES($member_e_mail,$member_password);

<購入者情報入力>
INSERT INTO Member_Information(member_last_name,member_first_name,phone,birth,post_code,
prefectures,city,street_address,building_name)
VALUES($member_last_name,$member_first_name,$phone,$birth,$post_code,
$prefectures,$city,$street_address,$building_name);


