<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
include $_SERVER['DOCUMENT_ROOT'] . '/Public/Resources/Config.php';
function Mark_Site_Name($Mark_P = true) {
    global $Mark_Config_Action;
    $site_name = htmlspecialchars($Mark_Config_Action['site_name']);
    if ($Mark_P) {
        echo $site_name;
        return;
    }
    return $site_name;
}
function Mark_Site_Name_Two() {
    global $Mark_Config_Action;
    $site_name_two = htmlspecialchars($Mark_Config_Action['nametwo']);
    echo $site_name_two;
}
function Mark_Site_Key($Mark_P = true) {
    global $Mark_Config_Action;
    $site_key = htmlspecialchars($Mark_Config_Action['site_key']);
    if ($Mark_P) {
        echo $site_key;
        return;
    }
    return $site_key;
}
function Mark_Site_Desc($Mark_P = true) {
    global $Mark_Config_Action;
    $site_desc = htmlspecialchars($Mark_Config_Action['site_desc']);
    if ($Mark_P) {
        echo $site_desc;
        return;
    }
    return $site_desc;
}
function Mark_Site_Link($Mark_P = true) {
    global $Mark_Config_Action;
    $site_link = $Mark_Config_Action['site_link'];
    if ($Mark_P) {
        echo $site_link;
        return;
    }
    return $site_link;
}
function Mark_Nick_Name($Mark_P = true) {
    global $Mark_Config_Action;
    $nick_name = htmlspecialchars($Mark_Config_Action['user_nick']);
    if ($Mark_P) {
        echo $nick_name;
        return;
    }
    return $nick_name;
}
function __Index__($abc) {
    global $Mark_Config_Action;
    $url = $Mark_Config_Action['site_link'] . '/Public/Resources/Index/' . $abc;
    echo $url;
}
function Mark_Is_Search() {
    global $Mark_Get_Type_Action;
    return $Mark_Get_Type_Action == 'search';
}
function Mark_Is_Post() {
    global $Mark_Get_Type_Action;
    return $Mark_Get_Type_Action == 'post';
}
function Mark_Is_Page() {
    global $Mark_Get_Type_Action;
    return $Mark_Get_Type_Action == 'page';
}
function Mark_Is_Tag() {
    global $Mark_Get_Type_Action;
    return $Mark_Get_Type_Action == 'tag';
}
function Mark_Is_Date() {
    global $Mark_Get_Type_Action;
    return $Mark_Get_Type_Action == 'date';
}
function Mark_Is_Archive() {
    global $Mark_Get_Type_Action;
    return $Mark_Get_Type_Action == 'archive';
}
function Mark_Tag_Name($Mark_P = true) {
    global $Mark_Get_Name_Action;
    if ($Mark_P) {
        echo htmlspecialchars($Mark_Get_Name_Action);
        return;
    }
    return $Mark_Get_Name_Action;
}
function Mark_Date_Name($Mark_P = true) {
    global $Mark_Get_Name_Action;
    if ($Mark_P) {
        echo htmlspecialchars($Mark_Get_Name_Action);
        return;
    }
    return $Mark_Get_Name_Action;
}
function Mark_Has_New() {
    global $Mark_Page_Num_Action;
    return $Mark_Page_Num_Action != 1;
}
function Mark_Has_Old() {
    global $Mark_Page_Num_Action, $Mark_Post_Coun_Action, $Mark_PageNum_Action;
    return $Mark_Page_Num_Action < ($Mark_Post_Coun_Action / $Mark_PageNum_Action);
}
function Mark_Goto_Old($text) {
    global $Mark_Get_Type_Action, $Mark_Get_Name_Action, $Mark_Page_Num_Action, $Mark_Config_Action;
    if ($Mark_Get_Type_Action == 'tag') {
        echo '<a href="';
        echo $Mark_Config_Action['site_link'];
        echo '/?tag/';
        echo $Mark_Get_Name_Action;
        echo '/?page=';
        echo ($Mark_Page_Num_Action + 1);
        echo '">';
        echo $text;
        echo '</a>';
    }elseif ($Mark_Get_Type_Action == 'date') {
        echo '<a href="';
        echo $Mark_Config_Action['site_link'];
        echo '/?date/';
        echo $Mark_Get_Name_Action;
        echo '/?page=';
        echo ($Mark_Page_Num_Action + 1);
        echo '">';
        echo $text;
        echo '</a>';
    }else {
        echo '<a href="';
        echo $Mark_Config_Action['site_link'];
        echo '/?page=';
        echo ($Mark_Page_Num_Action + 1);
        echo '">';
        echo $text;
        echo '</a>';
    }
}
function Mark_Goto_New($text) {
    global $Mark_Get_Type_Action, $Mark_Get_Name_Action, $Mark_Page_Num_Action, $Mark_Config_Action;
    if ($Mark_Get_Type_Action == 'tag') {
        echo '<a href="';
        echo $Mark_Config_Action['site_link'];
        echo '/?tag/';
        echo $Mark_Get_Name_Action;
        echo '/?page=';
        echo ($Mark_Page_Num_Action - 1);
        echo '">';
        echo $text;
        echo '</a>';
    }elseif ($Mark_Get_Type_Action == 'date') {
        echo '<a href="';
        echo $Mark_Config_Action['site_link'];
        echo '/?date/';
        echo $Mark_Get_Name_Action;
        echo '/?page=';
        echo ($Mark_Page_Num_Action - 1);
        echo '">';
        echo $text;
        echo '</a>';
    }else {
        echo '<a href="';
        echo $Mark_Config_Action['site_link'];
        echo '/?page=';
        echo ($Mark_Page_Num_Action - 1);
        echo '">';
        echo $text;
        echo '</a>';
    }
}
function Mark_Date_List($item_gap = '') {
    global $Mark_Dates_Action, $Mark_Config_Action;
    if (isset($Mark_Dates_Action)) {
        $date_count = count($Mark_Dates_Action);
        for ($i = 0; $i < $date_count; $i++) {
            $date = $Mark_Dates_Action[$i];
            echo '<a href="'.$Mark_Config_Action['site_link'].'/?date/'.$date.'/">'.$date. '</a>&nbsp&nbsp&nbsp&nbsp';
            
            if ($i < $date_count - 1) echo $item_gap;
        }
    }
}
function Mark_Tag_List($item_gap = '', $item_end = '&nbsp&nbsp&nbsp&nbsp') {
    global $Mark_Tag_Action, $Mark_Config_Action;
    if (isset($Mark_Tag_Action)) {
        $tag_count = count($Mark_Tag_Action);
        for ($i = 0; $i < $tag_count; $i++) {
            $tag = $Mark_Tag_Action[$i];
            echo '<a href="';
            echo $Mark_Config_Action['site_link'];
            echo '/?tag/';
            echo urlencode($tag);
            echo '/">';
            echo htmlspecialchars($tag);
            echo '</a>';
            echo $item_end;
            if ($i < $tag_count - 1) echo $item_gap;
        }
    }
}
function Mark_Next_Post() {
    global $Mark_Posts_Action, $Mark_Post_Ids_Action, $Mark_Post_Coun_Action, $Mark_Post_A_Action, $Mark_Post_M_End_Action, $Mark_Post_Id_Action, $Mark_Post_Action, $Mark_Page_Num_Action, $Mark_PageNum_Action;
    if (!isset($Mark_Posts_Action)) return false;
    if (!isset($Mark_Post_A_Action)) {
        $Mark_Post_A_Action = 0 + ($Mark_Page_Num_Action - 1) * $Mark_PageNum_Action;
        $Mark_Post_M_End_Action = $Mark_Post_A_Action + $Mark_PageNum_Action;
        if ($Mark_Post_Coun_Action < $Mark_Post_M_End_Action) $Mark_Post_M_End_Action = $Mark_Post_Coun_Action;
    }
    if ($Mark_Post_A_Action == $Mark_Post_M_End_Action) return false;
    if (!isset($Mark_Post_Ids_Action[$Mark_Post_A_Action])) return false;
    $Mark_Post_Id_Action = $Mark_Post_Ids_Action[$Mark_Post_A_Action];
    $Mark_Post_Action = $Mark_Posts_Action[$Mark_Post_Id_Action];
    $Mark_Post_A_Action+= 1;
    return true;
}
function Mark_The_Title($Mark_P = true) {
    global $Mark_Post_Action;
    if ($Mark_P) {
        echo htmlspecialchars($Mark_Post_Action['title']);
        return;
    }
    return htmlspecialchars($Mark_Post_Action['title']);
}
function Mark_The_Data($Mark_P = true) {
    global $Mark_Post_Action;
    if ($Mark_P) {
        echo $Mark_Post_Action['date'];
        return;
    }
    return $Mark_Post_Action['date'];
}
function Mark_The_Time($Mark_P = true) {
    global $Mark_Post_Action;
    if ($Mark_P) {
        echo $Mark_Post_Action['time'];
        return;
    }
    return $Mark_Post_Action['time'];
}
function Mark_The_Tags($item_begin = '', $item_gap = ', ', $item_end = '', $as_link = true) {
    global $Mark_Post_Action, $Mark_Config_Action;
    $tags = $Mark_Post_Action['tags'];
    $count = count($tags);
    for ($i = 0; $i < $count; $i++) {
        $tag = htmlspecialchars($tags[$i]);
        echo $item_begin;
        if ($as_link) {
            echo '<a href="';
            echo $Mark_Config_Action['site_link'];
            echo '/?tag/';
            echo urlencode($tag);
            echo '/">';
        }
        echo $tag;
        if ($as_link) {
            echo '</a>';
        }
        echo $item_end;
        if ($i < $count - 1) echo $item_gap;
    }
}
function Mark_The_Content($Mark_P = true) {
    global $Mark_Data_Action;
    if (!isset($Mark_Data_Action)) {
        global $Mark_Post_Id_Action;
        $data = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Data/' . $Mark_Post_Id_Action . '.Mark'));
        $html = $data['content'];
    } else {
        $html = $Mark_Data_Action['content'];
    }
    if ($Mark_P) {
        echo $html;
        return;
    }
    return $html;
}
function Mark_The_Des() {
    global $Mark_Data_Action, $Mark_Post_Id_Action;
    $des = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Data/' . $Mark_Post_Id_Action . '.Mark'));
    $des = $des['content'];
    $des = strip_tags($des);
    $des = Getstr($des, 300);
    echo $des;
}
function Mark_The_Keyword_Des() {
    global $Mark_Data_Action, $Mark_Post_Id_Action;
    $des = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/Index/Data/Post/Data/' . $Mark_Post_Id_Action . '.Mark'));
    $des = $des['content'];
    $des = strip_tags($des);
    $des = Getstr($des, 30);
    echo $des;
}
function Mark_The_Link() {
    global $Mark_Post_Id_Action, $Mark_Post_Action, $Mark_Config_Action;
    echo '<a href="';
    Mark_The_Url();
    echo '">';
    echo htmlspecialchars($Mark_Post_Action['title']);
    echo '</a>';
}
function Mark_The_Url($Mark_P = true) {
    global $Mark_Post_Id_Action, $Mark_Post_Action, $Mark_Config_Action;
    $url = $Mark_Config_Action['site_link'] . '/?post/' . $Mark_Post_Id_Action;
    if ($Mark_P) {
        echo $url;
        return;
    }
    return $url;
}
function Mark_Can_Comment() {
    global $Mark_Post_Id_Action, $Mark_Post_Action;
    return isset($Mark_Post_Action['can_comment']) ? $Mark_Post_Action['can_comment'] == '1' : true;
}
function Mark_Comment_Code() {
    global $Mark_Config_Action;
    echo isset($Mark_Config_Action['comment_code']) ? $Mark_Config_Action['comment_code'] : '';
}
//版权信息
function Copy_Right(){
    global $Mark_Config_Action;
    $copy_right = $Mark_Config_Action['copy_right'];
    echo $copy_right;
}
//取所有页面
function Mark_Pages($a,$b){
    global $Mark_Pages_Action;
    include $_SERVER[DOCUMENT_ROOT] . '/Index/Data/Page/Index/publish.php';
    $page_ids = array_keys($Mark_Pages_Action);
    $pages_id = count($page_ids);
    $page_array = array();
    $path_array = array();
    for ($i = 0; $i < $pages_id; $i++) {
    $page_id = $page_ids[$i];
    $post = $Mark_Pages_Action[$page_id];
    $page_array = array_merge($page_array, (array)$post['title']);
    $path_array = array_merge($path_array, (array)$post['path']);
    echo $a.'<a href="/?' . $path_array[$i] . '/">' . $page_array[$i] . '</a>'.$b;
    }       
}
//取最新5篇日志连接
function Post_Links(){
    global $Mark_Posts_Action;
    include $_SERVER[DOCUMENT_ROOT] . '/Index/Data/Post/Index/publish.php';
    $page_ids = array_keys($Mark_Posts_Action);
    $pages_id = count($page_ids);
    $page_array = array();
    $path_array = array();
    for ($i = 0; $i < $pages_id; $i++) {
    $page_id = $page_ids[$i];
    $post = $Mark_Posts_Action[$page_id];
    $page_array = array_merge($page_array, (array)$post['id']);
    $path_array = array_merge($path_array, (array)$post['title']);
    $post_link = $page_array[$i] ;
    $post_title = $path_array[$i];
    if ($i ==5) {
       break;
   }
   echo '<li class="note like"> <span class="action">';
    echo  '<a href="/?post/'.$post_link.'" title="'.$post_title.'">'.$post_title.'</a>';
    echo ' </span><div class="clear"></div> </li>';
 }
}
//友情链接
function Mark_Links($a,$b){
    global $Mark_Links_Action;
    include $_SERVER[DOCUMENT_ROOT] . '/Index/Data/Links/Index/publish.php';
    $Link_ids = array_keys($Mark_Links_Action);
    $Links__id = count($Link_ids);
    $Link_array = array();
    $Links_array = array();
    for ($i = 0; $i < $Links__id; $i++) {
    $Link_id = $Link_ids[$i];
    $post = $Mark_Links_Action[$Link_id];
    $Link_array = array_merge($Link_array, (array)$post['title']);
    $Links_array = array_merge($Links_array,(array)$post['content']);
    echo $a.'<a href="' . $Links_array[$i] . '" target="_blank">' . $Link_array[$i] . '</a>'.$b;
    }
}
?>