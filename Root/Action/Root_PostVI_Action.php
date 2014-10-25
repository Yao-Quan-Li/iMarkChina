<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/ 
session_start();
include 'Root_Hackdone_Action.php';
$post_id = '';
$post_state = '';
$post_title = '';
$post_content = '';
$post_tags = array();
$post_date = '';
$post_time = '';
$post_can_comment = '';
$succeed = false;
date_default_timezone_set('PRC');
if (isset($_POST['Post_VI_Action'])) {
     if ($_POST['Post_VI_Action'] == $_SESSION['Post_Code']) {   
    $post_id = $_POST['id'];
    $post_state = 'publish';
    $post_title = trim($_POST['title']);
    $post_content = get_magic_quotes_gpc() ? stripslashes(trim($_POST['content'])) : trim($_POST['content']);
    $post_date = date("Y-m-d");
    $post_time = date("H:i");
    $post_can_comment = $_POST['can_comment'];
    if ($_POST['tags'] == ''){
        $con =  strip_tags($post_content);
        $con = str_replace('&nbsp;', '',$con);
        $con = str_replace('&quot;', '',$con);
        $con = str_replace('&amp;lt;','',$con);
        $con = str_replace('&lt;','',$con);
        $con = Getstr($con,8);
        $con = trim($con);
        $post_tags = explode('，', $con);
    }else{
        $post_tags = explode('，',trim($_POST['tags']));
    }
    if ($_POST['state'] == 'draft') {
        unset($post_state);
        $post_state = 'draft';
    }
    if ($_POST['year'] != '') $post_date = substr_replace($post_date, $_POST['year'], 0, 4);
    if ($_POST['month'] != '') $post_date = substr_replace($post_date, $_POST['month'], 5, 2);
    if ($_POST['day'] != '') $post_date = substr_replace($post_date, $_POST['day'], 8, 2);
    if ($_POST['hourse'] != '') $post_time = substr_replace($post_time, $_POST['hourse'], 0, 2);
    if ($_POST['minute'] != '') $post_time = substr_replace($post_time, $_POST['minute'], 3, 2);
  $post_tags_count = count($post_tags);
    for ($i = 0; $i < $post_tags_count; $i++) {
        $trim = trim($post_tags[$i]);
        if ($trim == '') {
            unset($post_tags[$i]);
        } else {
            $post_tags[$i] = $trim;
        }
    }
    reset($post_tags);
    if ($post_title == '') {
        $error_msg = 'What the hell ? 标题空了';
    } else {
        if ($post_id == '') {
            $file_names = ShortUrl($post_title);
            foreach ($file_names as $file_name) {
                $file_path = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Data/' . $file_name . '.Mark';
                if (!is_file($file_path)) {
                    $post_id = $file_name;
                    break;
                }
            }
        } else {
            $file_path = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Data/' . $post_id . '.Mark';
            $data = unserialize(file_get_contents($file_path));
            $post_old_state = $data['state'];
            if ($post_old_state != $post_state) {
                $index_file = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Index/' . $post_old_state . '.php';
                include $index_file;
                unset($Mark_Posts_Action[$post_id]);
                file_put_contents($index_file, "<?php\n\$Mark_Posts_Action=" . var_export($Mark_Posts_Action, true) . "\n?>");
            }
        }
        $data = array(
            'id' => $post_id,
            'state' => $post_state,
            'title' => $post_title,
            'tags' => $post_tags,
            'date' => $post_date,
            'time' => $post_time,
            'can_comment' => $post_can_comment,
        );
        $index_file = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Index/' . $post_state . '.php';
        include $index_file;
        $Mark_Posts_Action[$post_id] = $data;
        uasort($Mark_Posts_Action, "post_sort");
        file_put_contents($index_file, "<?php\n\$Mark_Posts_Action=" . var_export($Mark_Posts_Action, true) . "\n?>");
        $data['content'] = $post_content;
        file_put_contents($file_path, serialize($data));
        $succeed = true;
    }
                   unset($_SESSION["Post_Code"]);  
    }else{
        echo "<script language=javascript>alert('请不重复刷新页面！(Please,don\'t！)');window.location='/Root/Post.php'</script>";
    }
} else if (isset($_GET['id'])) {
    $file_path = $_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Data/' . $_GET['id'] . '.Mark';
    $data = unserialize(file_get_contents($file_path));
    $post_id = $data['id'];
    $post_state = $data['state'];
    $post_title = $data['title'];
    $post_content = $data['content'];
    $post_tags = $data['tags'];
    $post_date = $data['date'];
    $post_time = $data['time'];
    $post_can_comment = isset($data['can_comment']) ? $data['can_comment'] : '1';
}
?>