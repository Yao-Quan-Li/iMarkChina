<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include $_SERVER['DOCUMENT_ROOT'] . '/Public/Resources/Config.php';
if (isset($_SESSION['Mark_Login'])) {
	$link = $Mark_Config_Action['root_link'];
	header("Location:/".$link."/index.php"); //重新定向到其他页面
    	exit();
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html lang="en" class="ie6 ielt7 ielt8 ielt9">
<![endif]--><!--[if IE 7 ]>
<html lang="en" class="ie7 ielt8 ielt9">
<![endif]--><!--[if IE 8 ]>
<html lang="en" class="ie8 ielt9">
<![endif]--><!--[if IE 9 ]>
<html lang="en" class="ie9">
<![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $Mark_Config_Action['site_name']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php __ROOT__('Css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php __ROOT__('Css/site.css'); ?>" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php __ROOT__('Js/html5.js'); ?>"></script>
<![endif]-->
</head>
<body>
<div id="login-page" class="container">
	<h1>System Login</h1>
	<form id="login-form" class="well" action="/Root/Action/Root_Checklogin_Action.php" method="post">
		<input type="text" class="span2" name="username" placeholder="Username"/><br/>
		<input type="password" class="span2" name="password" placeholder="Password"/><br/>
		<button type="submit" class="btn btn-primary">Action</button>
	</form>
	<div id="goback">
		←<span id="back"><a href="/">前台</a></span>
	</div><br/>
        © CopyRight 2014<?php Year(); ?><br/><br/><a href="http://www.creativecommons.org/licenses/by-nc-nd/3.0/cn/legalcode" target="_blank">署名-非商业性使用-禁止演绎 3.0</a>
</div>
</body>
</html>