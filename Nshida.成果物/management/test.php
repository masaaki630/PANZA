<?php
// // アップロード先のディレクトリ
// $uploadDirectory = 'uploads/';

// // エラーメッセージの初期化
// $errors = [];

// // POST メソッドでリクエストが送信されたか確認
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // アップロードされたファイルがあるか確認
//     if (!empty($_FILES['image'])) {
//         $file = $_FILES['image'];

//         // エラーチェック
//         if ($file['error'] !== UPLOAD_ERR_OK) {
//             $errors[] = 'アップロードエラーが発生しました。';
//         }

//         // ファイルの拡張子を取得
//         $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);

//         // 許可する拡張子のリスト
//         $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

//         // 拡張子が許可されたものか確認
//         if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
//             $errors[] = '許可されていないファイル形式です。';
//         }

//         // エラーがなければファイルを保存
//         if (empty($errors)) {
//             $uploadPath = $uploadDirectory . uniqid() . '.' . $fileExtension;

//             if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
//                 echo 'アップロードが成功しました。ファイル名: ' . basename($uploadPath);
//             } else {
//                 $errors[] = 'ファイルの保存に失敗しました。';
//             }
//         }
//     } else {
//         $errors[] = 'アップロードされたファイルがありません。';
//     }
// }

// // エラーメッセージがあれば表示
// if (!empty($errors)) {
//     echo 'エラーが発生しました:<br>';
//     foreach ($errors as $error) {
//         echo $error . '<br>';
//     }
// }
var_dump($_FILES);
?>