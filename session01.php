<?php
// SESSIONスタート
session_start();

// SESSIONのidを取得
$sid = session_id();

echo $sid;

//SESSION変数
$_SESSION['name'] = 'Ryutaro';
$_SESSION['age'] = 27;
$_SESSION['from'] = 'Kobe';
?>