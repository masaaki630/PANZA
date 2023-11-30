-- [システム]

-- <xxxx 商品詳細>
CREATE VIEW Product_Shosai AS 
  SELECT 
    P.company_id,
    PS.product_id,
    P.product_name,
    PS.size,
    PS.price,
    PS.stock,
    PS.min_stock,
    PS.product_size_created,
    PS.product_size_updated,
    PS.purchase_number,
    PS.purchase_number * PS.price AS shosai_uriage,
    C.category_id,
    C.category_name,
    C.sex_category 
  FROM 
    Product_Sizes AS PS 
  LEFT OUTER JOIN Products AS P 
    ON 
      P.product_id = PS.product_id
  LEFT OUTER JOIN Category AS C 
    ON 
      P.category_id = C.category_id
;

-- <商品一覧>
CREATE VIEW Product_List AS 
  SELECT 
    P.company_id,
    P.product_id,
    P.product_name,
    P.product_explanation,
    PS.category_name,
    P.product_created,
    P.product_updated,
    SUM(shosai_uriage) AS product_uriage 
  FROM 
    Products AS P 
  LEFT OUTER JOIN 
    Product_Shosai AS PS 
  ON 
    P.product_id = PS.product_id
  GROUP BY 
    P.product_id
;



-- <企業一覧>

CREATE VIEW Company_List AS 
  SELECT 
    C.company_id,
    C.company_name,
    C.company_place,
    SUM(product_uriage) AS company_uriage 
  FROM 
    Company AS C
  LEFT OUTER JOIN 
    Product_List AS PL 
  ON 
    C.company_id = PL.company_id
  GROUP BY 
    C.company_id
;


-- [ユーザー]
-- <お気に入り商品>
CREATE VIEW Favorite_Products_View AS 
  SELECT 
    PF.product_favorite_id,
    MI.member_id,
    PS.product_size_id,
    PS.product_id,
    PS.price,
    P.product_name,
    PI.product_image_path,
    C.company_id,
    C.company_name 
  FROM 
    Product_Favorite PF 
  JOIN 
    Member_Information MI 
  ON 
    PF.member_id = MI.member_id 
  JOIN 
    Product_Sizes PS 
  ON 
  PF.product_size_id = PS.product_size_id 
  JOIN 
    Products P 
  ON 
    PS.product_id = P.product_id 
  LEFT OUTER JOIN 
    Product_Images PI 
  ON 
    P.product_id = PI.product_id 
  JOIN 
    Company C 
  ON 
    P.company_id = C.company_id
;


-- <カート画面>
CREATE VIEW Product_Cart_View AS
  SELECT 
    PCt.product_cart_id,
    MI.member_id,
    PS.product_size_id,
    PS.product_id,
    PS.price,
    P.product_name,
    PI.product_image_path,
    C.company_id,
    C.company_name,
    PCt.amount 
  FROM 
    Product_Cart AS PCt 
  JOIN 
    Member_Information AS MI 
  ON 
    PCt.member_id = MI.member_id 
  JOIN 
    Product_Sizes AS PS 
  ON 
    PCt.product_size_id = PS.product_size_id 
  JOIN 
    Products AS P 
  ON 
    PS.product_id = P.product_id 
  LEFT OUTER JOIN 
    Product_Images AS PI 
  ON 
    P.product_id = PI.product_id 
  JOIN 
    Company AS C 
  ON 
    P.company_id = C.company_id
;


-- <メインページ>
CREATE VIEW Main_Page AS
  SELECT 
    P.product_id,
    MI.member_id,
    PH.history_id,
    Cg.category_id,
    Cg.category_name,
    Cg.sex_category,
    P.product_name,
    C.company_name,
    PS.price,
    PF.delete_flag,
    PI.product_image_path 
  FROM 
    Product_Sizes AS PS 
  LEFT OUTER JOIN 
    Product_Favorite AS PF 
  ON 
    PS.product_size_id = PF.product_size_id 
  LEFT OUTER JOIN 
    Products AS P 
  ON 
    P.product_id = PS.product_id 
  LEFT OUTER JOIN 
    Product_Images AS PI 
  ON 
    PI.product_id = PS.product_id 
  LEFT OUTER JOIN 
    Company AS C 
  ON 
    P.company_id = C.company_id 
  LEFT OUTER JOIN 
    Product_Histories AS PH 
  ON 
    P.product_id = PH.product_id 
  LEFT OUTER JOIN 
    Category AS Cg 
  ON 
    P.category_id = Cg.category_id 
  LEFT OUTER JOIN 
    Member_Information AS MI 
  ON 
    PF.member_id = MI.member_id 
;


-- <商品画面>
CREATE VIEW Product_Page AS
  SELECT 
    P.product_id,
    C.company_id,
    Cg.category_id,
    P.product_name,
    C.company_name,
    Cg.category_name,
    Cg.sex_category,
    PS.price,
    P.product_explanation,
    PF.delete_flag,
    PI.product_image_path
  FROM 
    Product_Sizes AS PS
  LEFT OUTER JOIN 
    Products AS P 
  ON 
    PS.product_id = P.product_id
  LEFT OUTER JOIN 
    Company AS C 
  ON 
    P.company_id = C.company_id
  LEFT OUTER JOIN 
    Product_Favorite AS PF 
  ON 
    PS.product_size_id = PF.product_size_id
  LEFT OUTER JOIN 
    Category AS Cg 
  ON 
    P.category_id = Cg.category_id
  LEFT OUTER JOIN 
    Product_Images AS PI 
  ON 
    PI.product_id = PS.product_id
;
