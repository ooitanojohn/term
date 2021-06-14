<?php
session_start();
require_once '../../const.php';
require_once 'config/err_code.php';
require_once 'model/controller.php';
require_once 'model/initialize.php';

echo '$_POST:';
var_dump($_POST);
echo '<br>';

// 検索ボタン押してない
if (!isset($_POST['sch_name'])) {
    // 全件表示
    $link = sql_connect('../../const.php');
    $sql = "SELECT * FROM sample";
    $result = sql_query($link, $sql, 'select');
}
// 検索ボタン押した
if (isset($_POST['sch_name'])) {
    $sch_name = $_POST['sch_name'];
    // 検索名を含む名前のあるレコードを表示
    if ($sch_name === '') {
        $result = [];
        $_SESSION['msg'] = '対象がありません';
    } else {
        $link = sql_connect('../../const.php');
        $sch_name = sql_escape($link, $sch_name);
        $sql = "SELECT *
        FROM sample
        WHERE name like '%" . $sch_name . "%'";
        $result = sql_query($link, $sql, 'select');
    }
}
// msg表示
if (isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    session_destroy();
}
require_once('model/view.php');
require_once('tpl/list.html');
