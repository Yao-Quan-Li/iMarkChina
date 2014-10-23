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
include 'Action/Root_Hackdone_Action.php';
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
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $Mark_Config_Action['site_name']; ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php __ROOT__('Css/bootstrap.min.css'); ?> " rel="stylesheet">
<link href="<?php __ROOT__('Css/bootstrap-responsive.min.css'); ?> " rel="stylesheet">
<link href="<?php __ROOT__('Css/site.css'); ?> " rel="stylesheet">
<link rel="stylesheet" href="<?php __ROOT__('Css/style.css');?>">
<!--[if lt IE 9]>
<script src="<?php __ROOT__('Js/html5.js'); ?>"></script>
<![endif]-->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span3">
			<div class="well" style="padding: 8px 0;">
				<ul class="nav nav-list">
					<li class="nav-header">
					<?php echo $Mark_Config_Action['site_name']; ?>
					</li>
					<li class="link_button"><a href="<?php echo $Mark_Config_Action['site_link']; ?>" target="_blank"><i class="icon-home"></i> 返回前台</a>
					</li>
					<li class="link_button"><a href="<?php echo $Mark_Config_Action['site_link']; ?>/Root/index.php"><i class="icon-list-alt"></i> 后台首页</a>
					</li>
					<li class="link_button">
					<a href="Post.php"><i class="icon-folder-open"></i> 查看日志</a>
					</li>
					<li class="link_button">
					<a href="Page.php"><i class="icon-check"></i> 查看页面</a>
					</li>
					<li class="link_button">
					<a href="Links.php"><i class="icon-check"></i> 友情链接</a>
					</li>
					<li class="link_button">
					<a href="Config.php"><i class="icon-cog"></i> 系统设置</a>
					</li>
					<li class="link_button">
					<a href="Head.php?getout=logout"><i class="icon-info-sign"></i> 退出系统</a>
					</li>
				</ul>
			</div>
		</div>