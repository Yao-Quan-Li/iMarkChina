<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
?> 
<div class="m-post m-post-txt ">
	<div class="postinner">
		<div class="ct">
			<div class="ctc box">
				<h2 class="ttl"><?php Mark_The_Link(); ?></h2>
				<div class="txtcont">
					<p><?php Mark_The_Content(); ?></p>
				</div>
			</div>
		</div>
		<div class="infol info box">
			<span class="icn icn2 ">&nbsp;</span>
		</div>
		<div class="infor info box">
			<a class="date" href="#"><?php Mark_The_Data(); ?></a>
		</div>
		<div class="m-info box">
			<div class="tags f-fl">Tags: <?php Mark_The_Tags('', '', ''); ?></div>
		</div>
	</div>
	<a class="cmt abc" href="#">By: <?php Mark_Nick_Name(); ?>
	</a>
	<a href="#" class="cc cc_1 abc" title=" 署名-非商业性使用-禁止演绎 3.0">&nbsp;</a>
			<br>日志固定链接: <a   href="<?php Mark_The_Url(); ?>"><?php Mark_The_Url(); ?></a>
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