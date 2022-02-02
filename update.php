<?php
//1. POSTデータ取得
$name = $_POST["name"];
$url = $_POST["url"];
$comment = $_POST["comment"];
$id = $_POST["id"];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ更新SQL作成（UPDATE テーブル名 SET 更新対象1=:更新データ ,更新対象2=:更新データ2,... WHERE id = 対象ID;）
$stmt = $pdo->prepare(
     "UPDATE ryu_an_table SET 
    name = :name , url = :url , comment = :comment, indate = sysdate()
    WHERE id = :id;"
  );
  
// 4. バインド変数を用意
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  

// 5. 実行
$status = $stmt->execute();


if($status==false){

  sql_error($stmt);

}else{

  redirect('select.php');
}
?>