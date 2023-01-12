<?php


// 0. SESSION開始！！
session_start();
//１．関数群の読み込み
require_once('funcs.php');
loginCheck();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_an_table_0107;');
$status = $stmt->execute();


//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
   
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .='<a href="detail.php?id=' .  h($result['id'])  . ' ">';
        $view .= h($result['indate']) . '：' . h($result['name']);
        $view .='</a>';

        $view .='<a href="delete.php?id=' .  h($result['id'])  . ' ">';
        $view .= '[ 削除 ]';
        $view .='</a>';


        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登録一覧</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div>
        <div class="container jumbotron">
            <?= $view ?>
        </div>
    </div>
    <!-- Main[End] -->

</body>

</html>
