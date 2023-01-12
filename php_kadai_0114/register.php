<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//1. POSTデータ取得
$name   = $_POST['name'];
$lid  = $_POST['lid'];
$lpw = $_POST['lpw'];
$kanri_flg = 0;
$life_flg = 0;

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO gs_user_table(name,lid,lpw,kanri_flg,life_flg)
                                          VALUES(:name,:lid,:lpw,:kanri_flg,:life_flg);');
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg',$kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg',$life_flg, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('login.php');
}
