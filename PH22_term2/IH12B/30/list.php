<?php
require_once '../../const.php';
require_once 'config/err_code.php';
require_once 'model/controller.php';

// 検索ボタン押してない
if (isset($_POST["btn"]) !== 'push_search') {
    // 全件表示
    $link = sql_connect('../../const.php');
    $sql = "SELECT * FROM sample";
    $result = sql_query($link, $sql, 'select', '');
}
// 検索ボタン押した
if (isset($_POST["btn"]) === 'push_search') {
    // 検索名を含む名前のあるレコードを表示
    if (null_judge($sch_name = $_POST['sch_name'])) {
        $result = [];
    } else {
        $link = sql_connect('../../const.php');
        $sch_name = sql_escape($link, $sch_name);
        $sql = "SELECT *
        FROM sample
        WHERE name like '%" . $sch_name . "%'";
        $result = sql_query($link, $sql, 'select', '');
    }
}

// if (isset($_POST["btn"]) === 'add')

require_once('model/view.php');
require_once('tpl/list.php');
