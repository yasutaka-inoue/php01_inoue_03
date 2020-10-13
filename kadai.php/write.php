<?php
// ファイルに書き込み
$name = $_POST["name"];
$mail = $_POST["mail"];
$from = $_POST["from"];
$age = $_POST["age"];


// 日時取得
$str = date("Y年m月d日 H時i分");
//文字作成
$data = $str. " ". $name." ". $mail. " ". $from. " ". $age;
$array = ["name" => $name,
          "mail"=> $mail,
          "from"=> $from,
          "age"=> $age];
$jsonstr =  json_encode($array);

$file = fopen("./data/data.txt","a");
fwrite($file, $jsonstr . "\n");
fclose($file);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録しました</title>
</head>
<body>
<body>

<h1>登録しました</h1>
<h2>書き込み内容 : <?= $data ?></h2>

<ul>
    <li><a href="read.php">集計結果を見る</a></li>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>