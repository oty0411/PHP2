
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
     <title>アンケートフォーム</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300&display=swap" rel="stylesheet">
    <style>
        body{   
          background: #f3f3f3;
          font-family: 'Zen Maru Gothic', sans-serif;
        }

          form{
          width:700px;
          margin-right: auto;
          margin-left : auto;
          }
    </style>
  <title></title>
</head>
<header>
<img src="/Applications/XAMPP/xamppfiles/htdocs/06_php01_sample/php_img/osi.png" width="300px" height="200px" alt="青空">

</header>
<body>
  <form action="test_comfirm.php" method="post">
    <p>HN<input type="text" name="name"></p>
    <p>性別
      <input type="radio" name="gender" value="男性">男性
      <input type="radio" name="gender" value="女性">女性
    </p>
    <p>好きなキャラ
      <select name="likes">
        <option value="アンパンマン">アンパンマン</option>
        <option value="バイキンマン">バイキンマン</option>
        <option value="カレーパンマン">カレーパンマン</option>
        <option value="食パンマン">食パンまん</option>
        <option value="ジャム">ジャム</option>
      </select>
    </p>
    <p>推しへの愛を語る</p>
    <p><textarea name="option" cols="50" rows="5"></textarea></p>
    <div class="d-grid">
    <button type="submit" class="btn btn-success">送信</button>
    </div>
  </form>
</body>
</html>