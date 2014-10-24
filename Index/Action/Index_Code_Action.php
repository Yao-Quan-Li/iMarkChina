<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
error_reporting(E_ALL ^ E_NOTICE);
include_once 'Index_Config_Action.php';
include_once 'Index_Action_Action.php';
function Mark_404() {
    header('HTTP/1.0 404 Not Found');
    echo "<title>404 Not Found</title>";
    echo "<h1>404 Not Found</h1>";
    echo "Oh,Shit ! Where are they go?.";
    exit();
}
function Mark_Search_Search(){
  global $Mark_Config_Action;
//Time out one min (600);
set_time_limit("600");
//Get the keyword;
$keyword=trim($_POST["keyword"]);
$keyword=htmlspecialchars($keyword);
//Check the key word;
if($keyword==""){
echo"keyword is NULL<br/>(关键字不能为空 )";
exit;//Shutdown the PHP Code;
}
function listFiles($dir,$keyword,&$array){
$dir = './Index/Data/Post/Data';
$handle=opendir($dir);
while(false!==($file=readdir($handle))){
if($file!="."&&$file!=".."){
if(is_dir("$dir/$file")){
listFiles("$dir/$file",$keyword,$array);
}
else{
$data=fread(fopen("$dir/$file","r"),filesize("$dir/$file"));
if(eregi("<body([^>]+)>(.+)</body>",$data,$b)){
$body=strip_tags($b["2"]);
}
else{
$body=strip_tags($data);
}
if($file!="Mark.php"){ //Don't fine me;
if(eregi("$keyword",$body)){
if(eregi('"title"(.+)"tags"',$data,$m)){
$title=$m["1"];
}
else{
$title="Can't find Title (没有标题)";
}
$array[]="$dir/$file $title";
}
}
}
}
}
}
$array=array();
listFiles(".","$keyword",$array);
//This "if" form check $array to NULL;
if ($array != null) {
foreach($array as $value){
//open the $filedir and the $title;
list($filedir,$title)=split("[ ]",$value,"2");
// Delete something I don't need,Start;
$postlist = substr($filedir,0,strlen($filedir)-11);
$filedir = str_replace($postlist, '', $filedir);
$filedir = substr($filedir,0,strlen($filedir)-5);
$title = str_replace('";s:4:', '',$title);
$title = str_replace(';s:', '',$title);
$title = str_replace(':"', '',$title);
 $title = str_replace('0', '',$title);
$title = str_replace('1', '',$title);
$title = str_replace('2', '',$title);
$title = str_replace('3', '',$title);
$title = str_replace('4', '',$title);
$title = str_replace('5', '',$title);
$title = str_replace('6', '',$title);
$title = str_replace('7', '',$title);
 $title = str_replace('8', '',$title);
 $title = str_replace('9', '',$title);
$title = preg_replace("@<script(.*?)</script>@is", "", $title); 
$title  = preg_replace("@<iframe(.*?)</iframe>@is", "", $title); 
$title  = preg_replace("@<style(.*?)</style>@is", "", $title); 
$title  = preg_replace("@<(.*?)>@is", "", $title); 
$title = preg_replace("@<?php (.*?) ?>@is", "",$title);
$title = preg_replace("@(.*?);@is", "",$title);
$title = preg_replace("@$(.*?).@is", "",$title);
$title = htmlspecialchars_decode($title); 
$title = preg_replace("/<(.*?)>/","",$title); 
//Delete something I don't need,End;
//Print
if ($Mark_Config_Action['write'] == 'open') {
 echo '<a href="/post-'.$filedir.'.html" target="_blank" title="'.$title.'">'.$title.'</a>'.'<br>';
}else{
  echo '<a href="/?post/'.$filedir.'" target="_blank" title="'.$title.'">'.$title.'</a>'.'<br>';
}
}
} else {
	echo 'My apologize,I can\'t find something Information! <br/> (非常抱歉，搜索不到相关信息！ )';
}
}
function Mark_keyword(){
  global $Mark_Config_Action;
  if ($Mark_Config_Action['write'] == 'open') {
    echo '/search.html';
  }else{
    echo '/?search/';
  }
}
?>