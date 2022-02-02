<?php
//selsect.phpから処理を持ってくる
//1.外部ファイル読み込みしてDB接続(funcs.phpを呼び出して)
require_once('funcs.php');
$pdo = db_conn();


//2.対象のIDを取得
$id = $_GET['id'];


//3．データ取得SQLを作成（SELECT文）
$stmt = $pdo->prepare("SELECT * FROM ryu_an_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ表示
$view = '';

if ($status == false) {
    sql_error($status);
} else {
    $result = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Bookmark一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Bookmark</legend>
     <label>書籍名：<input type="text" name="name" value="<?= $result['name']?>"></label><br>
     <label>著者：<input type="text" name="url" value="<?= $result['url']?>"></label><br>
     <label>書籍コメント<textArea name="comment" rows="1" cols="40"><?= $result['comment']?></textArea></label><br>
     <input type="hidden" name="id" value="<?= $result['id']?>">
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>