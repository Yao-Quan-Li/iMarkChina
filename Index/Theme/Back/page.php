<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
?>
<div class="post photopost">
	<div class="txt">
		<p><?php Mark_The_Content(); ?></p>
	</div>
</div>
<div class="info">
	<img src="<?php __Index__('Public/Images/addtime.png')?>" width="17" height="17" />
	<a class="date" href="#"><?php Mark_The_Data(); ?>-<?php Mark_The_time();?></a>&nbsp;
	<img src="<?php __Index__('Public/Images/contacts.png')?>" width="17" height="17" />
	<a class="cmt" href="#">By: <?php Mark_Nick_Name(); ?></a>&nbsp;
	<a href="#" class="cc cc_1" title=" 署名-非商业性使用-禁止演绎 3.0">&nbsp;</a>
</div>
<br/>
<div class="m-hot">
	<style>
.uyan_cmt_txt{color: #fff !important ;}
.wrap-issue-gw{color: #fff !important;}
	</style>
	<?php  if (Mark_Can_Comment()) { Mark_Comment_Code(); }else{echo '评论已关闭';} ?>
</div>
