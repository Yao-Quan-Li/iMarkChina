<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/ 
include 'header.php';
?>
<body>
<?php include 'top.php';?>
<div id="main">
	<?php if (Mark_Is_Post()) { ?>
	<?php include 'post.php';?>
	<?php } elseif (Mark_Is_Page()) { ?>
	<?php include 'page.php'; ?>
	<?php } elseif (Mark_Is_Archive()) { ?>
	<?php include 'archive.php'; ?>
	<?php } elseif (Mark_Is_Search()) {?>
	<?php Mark_Search_Search(); ?>
	<?php } else { ?>
	<?php include 'tag.php'; ?>
	<?php    while (Mark_Next_Post()) { ?>
	<div class="post photopost">
		<div class="info"> <?php Mark_The_Link(); ?>
			<a href="<?php Mark_The_Url(); ?>"><?php Mark_The_Data(); ?></a>
			<a href="<?php Mark_The_Url(); ?>">查看全文</a>
		</div>
		<div class="txt">
			<p><?php Mark_The_Des(); ?></p>
		</div>
	</div>
	<?php } ?>
	<div class="post pager">
		<?php if (Mark_Has_New()) { ?>
		<?php Mark_Goto_New('&larr;Prev'); }?>
		&nbsp;&nbsp;&nbsp;<?php if (Mark_Has_Old()) { ?>
		<?php Mark_Goto_Old('Next&rarr;'); } }?>
	</div>
</div>
<?php
$fdlinks = $Mark_Config_Action['fdlinks'];
if ($fdlinks == open) {
if ($Mark_Url_Action != ''){ 
	echo "<!--------->"; 
}else {
 if ($Mark_Get_Type_Action == 'index') { ?>
<div id="abc">
友情链接：
	<style>
ul{list-style-type:none; margin:0; }
ul li a{ width:80px; float:left; color: #494545}
	</style>
	<ul> <?php Mark_Links('<li>','</li>'); ?> </ul>
</div>
<?php  } } } include 'footer.php'; ?>
</body>
</html>