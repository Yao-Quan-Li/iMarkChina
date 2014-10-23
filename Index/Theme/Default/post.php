<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
?>
<div class="postinner">
	<div class="ct">
		<div class="ctc box">
			<div class="text">
				<p><strong><?php Mark_The_Link(); ?></strong></p>
				<p>&nbsp;</p>
				<p><?php Mark_The_Content(); ?></p>
			</div>
		</div>
	</div>
	<div class="info box">
		<div class="tags box">Tags: <?php Mark_The_Tags('', '', ''); ?></div>
		<div class="meta box">
			<img src="<?php __Index__('Public/Images/addtime.png')?>" width="17" height="17" />
			<a class="date" href="#"><?php Mark_The_Data(); ?>/<?php Mark_The_time();?></a>
			<img src="<?php __Index__('Public/Images/contacts.png')?>" width="17" height="17" />
			<a class="cmt" href="#">By: <?php Mark_Nick_Name(); ?></a>
			<a href="#" class="cc cc_1" title=" 署名-非商业性使用-禁止演绎 3.0">&nbsp;</a>
			日志固定链接: <?php echo '<a href="'.$Mark_Config_Action['site_link'].'/?'.$_SERVER['QUERY_STRING'].'">'.$Mark_Config_Action['site_link'].'/?'.$_SERVER['QUERY_STRING'].'</a>';?>
		</div>
	</div>
	<div class="m-pager m-pager-dtl">
		<div class="pagerc box">
			<!--留空-->
		</div>
	</div>
	<div class="m-cmthot">
		<div class="cmthotc">
			<div class="m-hot">
			<div class="box">
		<div class="nctitle" style="">新的</div>
	<ol class="notes"> <?php Post_Links(); ?> </ol>
		</div>
	</div>
	<div class="m-cmt">
		<div class="box">
	<?php  if (Mark_Can_Comment()) { Mark_Comment_Code(); }else{echo '评论已关闭';} ?>
		</div>
		</div>
		</div>
	</div>