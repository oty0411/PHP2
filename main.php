<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // POSTでのアクセスでない場合
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $err_msg = '';
    $complete_msg = '';

} else {）
    // 入力された値を取得する
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subdent = $_POST['subdent'];
    $message = $_POST['message'];

    // エラーメッセージ・完了メッセージの用意
    $err_msg = '';
    $complete_msg = '';

    // 空チェック
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        $err_msg = '全ての項目を入力してください。';
    }

    // エラーなし（全ての項目が入力されている）
    if ($err_msg == '') 


        // メール送信
        mb_send_mail($subdent, $message, $headers);

        // 完了メッセージ
        $complete_msg = '送信されました！';

        // 全てクリア
        $name = '';
        $gendr = '';
        $subdent ='';
        $subject = '';
        $message = '';
    }
}
?>



<!DOCTYPE html>
<html lang="jp">
<head>
     <meta charset="utf-8">
    <title>アンケートフォーム</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300&display=swap" rel="stylesheet">
    <style>
        body
        {font-family: 'Zen Maru Gothic', sans-serif;}
    </style>
</head>
<body>
<form action="todo_post_confirm.php" method="POST">
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="mb-5 text-center">お問い合わせ</h3>
            <form method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="お名前" value="">
                </div>
                <form method="post" action="example.cgi">
                <p>今日も元気ですか？<br>
                <input type="radio" name="subdent" value="はい"> はい
                <input type="radio" name="subdent" value="いいえ"> いいえ
                </p>
                <div class="mb-3">
                    <input type="text" class="form-control" name="email" placeholder="メールアドレス" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="subject" placeholder="件名" value="">
                </div>
                <div class="mb-4">
                    <textarea class="form-control" name="message" rows="5" placeholder="本文"></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>