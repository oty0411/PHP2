<?php
$errors = [];
$name = $_POST['name'];
$gender = $_POST['gender'];
$likes = $_POST['likes'];
$option = $_POST['option'];


//データを出力
echo $data;
include "test.php";

//  if($_GET['name'] !== "") {
//      $radio1 = $_GET['name'];
//    }else{
//      echo $_GET['name'];
//      $name = "";
//      $errors[]  = '名前を入力してください';
//    }

//    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//       POSTでのアクセスでない場合
//      $name = '';
//      $gender = '';
//      $likes = '';
//      $option = '';
//      $err_msg = '';
//      $complete_msg = '';

//  } else {
//       入力された値を取得する
//      $name = $_POST['name'];
//      $gender = $_POST['gender'];
//      $likes = $_POST['likes'];
//      $option = $_POST['option'];

//       エラーメッセージ・完了メッセージの用意
//      $err_msg = '';
//      $complete_msg = '';

//       空チェック
//      if ($name == '' || $gender == '' || $likes == '' || $option == '') {
//          $err_msg = '全ての項目を入力してください。';
//      }

//       エラーなし（全ての項目が入力されている）
//      if ($err_msg == '') 

//           本文の最後に名前を追加
//          $message .= "\r\n\r\n" . $name;

//           メール送信
//          mb_send_mail($name,$gender, $likes, $option);

//           完了メッセージ
//          $complete_msg = '送信されました！';

//           全てクリア
//          $name = '';
//          $gender = '';
//          $likes ='';
//          $option = '';
//      }


 ?>



<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title></head>

 <body>
   <fieldset>
     <legend>これでいいですか？</legend>
     <table>
       <thead>
         <tr>
           <th>HN</th>
           <th>性別</th>
            <th>好きなキャラ</th>
           <th>推しへの愛</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td><?=$name?></td>
           <td><?=$gender?></td>
           <td><?=$likes?></td>
         <td><?=$option?></td>
         </tr>
       </tbody>
     </table>
   </fieldset>
 </body>

 </html>