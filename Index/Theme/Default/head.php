<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
 if (!isset($Mark_Config_Action)) exit;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<title><?php if (Mark_Is_Post() || Mark_Is_Page()) { Mark_The_Title(); ?> | <?php Mark_Site_Name(); } else { Mark_Site_Name();} ?></title>
<meta name="keywords" content="<?php if ($Mark_Url_Action == ""){Mark_Site_Key();}else{Mark_The_Keyword_Des();} ?>" />
<meta name="description" content="<?php if ($Mark_Url_Action == ""){Mark_Site_Desc();}else{Mark_The_Des();} ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php __Index__('Public/Images/favicon.ico');?>" />
<link type="text/css" rel="stylesheet" href="<?php __Index__('Default/Css/styel.css');?>"/>
<script src="<?php __Index__('Public/Js/jquery-1.10.1.code.js');?>"></script>
<script src="<?php __Index__('Public/Js/code.js');?>"></script>
<link rel="stylesheet" href="<?php __Index__('Public/Css/code.css');?>" type="text/css" rel="stylesheet"/>
<script>
$(document).ready(function() {
  hljs.initHighlightingOnLoad();
});
</script>
</head>