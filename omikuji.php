<?php

$random_number = rand(1,5);

if($random_number===1){
    $result = '大吉';
}else if($random_number ===2){
    $result ='中吉';
}else if($random_number ===3){
    $result ='小吉';
}
else if($random_number ===4){
    $result ='凶';
}else if($random_number ===5){
    $result ='大凶';
}


echo $result;
$array = ['大吉','中吉','小吉','凶','大凶'];


?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


