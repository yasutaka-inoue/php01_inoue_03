<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
function getfile(){
    // ファイルを開く
    $openFile = fopen("./data/data.txt","r");
    // ファイル内容を1行ずつ読み込んで出力
    while($str = fgets($openFile)){
        // echo nl2br($str);
        $array = json_decode($str, true);
        $name = h($array ["name"]);
        $mail = h($array ["mail"]);
        $from = h($array ["from"]);
        $age = h($array ["age"]);
        echo "<tr><td>".$name."</td>
        <td>".$mail."</td>
        <td>".$from."</td>
        <td>".$age."</td></tr>";
    }
    // ファイルを閉じる
    fclose($openFile);
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>集計結果</title>
</head>
<body>
    <h1>集計結果</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>メール</th>
            <th>出身</th>
            <th>年齢</th>
        </tr>
        <?php getfile() ?>
    </table>
</body>
</html>