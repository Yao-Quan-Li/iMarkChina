<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/ 
include_once $_SERVER['DOCUMENT_ROOT'].'/Index/Action/Index_Code_Action.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>404 error page | <?php Mark_Site_Name(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php __Index__('Public/Css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="wrap">
		<div class="content">
			<div class="logo">

				<div id="logoo">&nbsp;</div>
				
				<span>Oh,shit ! Where are they go ? ! <br>I miss something good ? ! <br>Oh,come on. <br>I found the 404 error page !  <br>Damn it ! </span>
			</div>
			<div class="buttom">
				<div class="seach_bar">
					<p>you can go to <span><a href="<?php Mark_Site_Link(); ?>">home</a></span> page or search here</p>
					<div class="search_box">
					<form action="<?php Mark_keyword(); ?>" method="post">
					   <input type="text" name="keyword" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
				    </form>
					 </div>
				</div>
			</div>
		</div>
<p class="copy_right">© CopyRight  2014 |  <?php Year(); ?><?php Copy_Right(); ?> </p>
	</div>
</body>
</html>