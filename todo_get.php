
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo登録画面（GET）</title>
</head>


<body>
  <img src="/Applications/XAMPP/xamppfiles/htdocs/06_php01_sample/php_img" alt="">
  <!-- formにはaction, method, nameを設定！ -->
  <form action="todo_get_confirm.php" method="GET">
    <fieldset>
      <legend>todo登録画面（GET）</legend>
      <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
</body>

</html>