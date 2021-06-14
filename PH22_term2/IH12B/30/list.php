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
        // 条件 order
        $order_col = $_POST['order_col'];
        $order = $_POST['order'];

        $link = sql_connect('../../const.php');
        $sch_name = sql_escape($link, $sch_name);
        $sql = "SELECT *
        FROM sample
        WHERE name like '%" . $sch_name . "%'
        ORDER BY " . $order_col . "\n" . $order . " ";
        echo '$sql:';
        var_dump($sql);
        echo '<br>';
        $result = sql_query($link, $sql, 'select');
    }
}
// 並び替え
// if (isset($_POST['order'])) {
//     $order_col = $_POST['order_col'];
//     $order = $_POST['order'];

//     $link = sql_connect('../../const.php');
//     $sql = "SELECT * FROM sample ORDER BY '.$order_col $order.'";
//     $result = sql_query($link, $sql, 'select');
// }
// msg表示
if (isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    session_destroy();
}
require_once('model/view.php');
require_once('tpl/list.php');
