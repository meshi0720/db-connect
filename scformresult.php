<?php
require_once('funcs.php');
//funcs.phpに移植後,
//function h($stg) {
//    return htmlspecialchars($stg, ENT_QUOTES);  
//}

//1.  DB接続します
//$db_name = '';               // データベース名
//$db_host = '';        // DBホスト
//$db_id   = '';               // ユーザー名
//$db_pw   = '';                         // パスワード

//try {
//    $server_info = 'mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host;
//    $pdo = new PDO($server_info, $db_id, $db_pw);
//} catch (PDOException $e) {
//    exit('DB Connection Error:' . $e->getMessage());
//}

try {
  $pdo = new PDO('mysql:dbname=schoolchoice_db_test;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());  
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM answer1;");

//executeで実行
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status === false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる(中身を１行ずつ持ってくるから)
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){

    $view .='<p>';
    //$view .= htmlspecialchars($result['date'], ENT_QUOTES) .'/' . $result['name'] . '/' . $result['email'] . '/' . $result['content'];
    //上の.の意味は「変数に追記して」という意味になる。これがないと上書きされてしまう.
    //htmlspecialchars・・・を関数（function）化する前は上記、下がhで関数化した後

    $view .= $result['date'] .'/' . h($result['q1']) . '/' . h($result['q2']) . '/' . h($result['q3']);
    $view .='</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>アンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{font-size:14px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="post.php">アンケート登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>

