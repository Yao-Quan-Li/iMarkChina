<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
session_start();
include 'Root_Hackdone_Action.php';
if (!is_dir($_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Data/')) mkdir($_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Data/',0777);
function load_pages() {
    global $state, $index_file, $Mark_Links_Action;
    if (isset($_GET['state'])) {
        if ($_GET['state'] == 'draft') {
            $state = 'draft';
            $index_file = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Index/draft.php';
        } else if ($_GET['state'] == 'delete') {
            $state = 'delete';
            $index_file = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Index/delete.php';
        } else {
            $state = 'publish';
            $index_file = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Index/publish.php';
        }
    } else {
        $state = 'publish';
        $index_file = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Index/publish.php';
    }
    require $index_file;
}
function delete_page($id) {
    global $state, $index_file, $Mark_Links_Action;
    $page = $Mark_Links_Action[$id];
    $page['prev_state'] = $state;
    unset($Mark_Links_Action[$id]);
    file_put_contents($index_file, "<?php\n\$Mark_Links_Action=" . var_export($Mark_Links_Action, true) . "\n?>");
    if ($state != 'delete') {
        $index_file2 = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Index/delete.php';
        require $index_file2;
        $Mark_Links_Action[$id] = $page;
        file_put_contents($index_file2, "<?php\n\$Mark_Links_Action=" . var_export($Mark_Links_Action, true) . "\n?>");
    } else {
        unlink($_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Data/' . $page['file'] . '.Mark');
    }
}
function revert_page($id) {
    global $state, $index_file, $Mark_Links_Action;
    $page = $Mark_Links_Action[$id];
    $prev_state = $page['prev_state'];
    unset($page['prev_state']);
    unset($Mark_Links_Action[$id]);
    file_put_contents($index_file, "<?php\n\$Mark_Links_Action=" . var_export($Mark_Links_Action, true) . "\n?>");
    $index_file2 = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Links/Index/' . $prev_state . '.php';
    require $index_file2;
    $Mark_Links_Action[$id] = $page;
    ksort($Mark_Links_Action);
    file_put_contents($index_file2, "<?php\n\$Mark_Links_Action=" . var_export($Mark_Links_Action, true) . "\n?>");
}
load_pages();
if (isset($_GET['delete']) || (isset($_GET['apply']) && $_GET['apply'] == 'delete')) {
    if (isset($_GET['apply']) && $_GET['apply'] == 'delete') {
        $ids = explode(',', $_GET['ids']);
        foreach ($ids as $id) {
            if (trim($id) == '') continue;
            delete_page($id);
            load_pages();
        }
    } else {
        delete_page($_GET['delete']);
    }
    Header('Location:Links.php?done=true&state=' . $state);
    exit();
}
if (isset($_GET['revert']) || (isset($_GET['apply']) && $_GET['apply'] == 'revert')) {
    if (isset($_GET['apply']) && $_GET['apply'] == 'revert') {
        $ids = explode(',', $_GET['ids']);
        foreach ($ids as $id) {
            if (trim($id) == '') continue;
            revert_page($id);
            load_pages();
        }
    } else {
        revert_page($_GET['revert']);
    }
    Header('Location:Links.php?done=true&state=' . $state);
    exit();
}
if (isset($_GET['done'])) {
    $message = '操作成功';
}
$Links_ids = array_keys($Mark_Links_Action);
$Links_count = count($Links_ids);
$date_array = array();
for ($i = $Links_count - 1; $i >= 0; $i--) {
    $Links_id = $Links_ids[$i];
    $page = $Mark_Links_Action[$Links_id];
    $date_array[] = substr($page['date'], 0, 7);
}
$date_array = array_unique($date_array);
if (isset($_GET['date'])) $filter_date = $_GET['date'];
else $filter_date = '';
$Mark_Links_Action2 = array();
for ($i = 0; $i < $Links_count; $i++) {
    $Links_id = $Links_ids[$i];
    $page = $Mark_Links_Action[$Links_id];
    if ($filter_date != '' && strpos($page['date'], $filter_date) !== 0) continue;
    $Mark_Links_Action2[$Links_id] = $page;
}
$Mark_Links_Action = $Mark_Links_Action2;
$Links_ids = array_keys($Mark_Links_Action);
$Links_count = count($Links_ids);
$last_page = ceil($Links_count / 10);
if (isset($_GET['page'])) $Links_num = $_GET['page'];
else $Links_num = 1;
if ($Links_num > 1) $prev_page = $Links_num - 1;
else $prev_page = 1;
if ($Links_num < $last_page) $next_page = $Links_num + 1;
else $next_page = $last_page;
if ($Links_num < $last_page) $next_page = $Links_num + 1;
else $next_page = $last_page;
if ($Links_num < 0) $Links_num = 1;
else if ($Links_num > $last_page) $Links_num = $last_page;
?>