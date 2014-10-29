<?php 
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
include 'head.php'; ?>
<body class="p-homepage">
<div class="g-doc box">
	<?php include 'top.php'; ?>
	<div class="g-bd">
		<div class="g-bdc box">
			<div class="m-postlst">
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
				<div class="m-post m-post-txt ">
					<div class="postinner">
						<div class="ct">
							<div class="ctc box">
								<h2 class="ttl"><?php Mark_The_Link(); ?></h2>
								<div class="txtcont">
									<p><?php Mark_The_Des(); ?></p>
								</div>
							</div>
						</div>
						<div class="infol info box">
							<span class="icn icn2 ">&nbsp;</span>
						</div>
						<div class="infor info box">
						<a class="date" href="<?php Mark_The_Url(); ?>"><?php Mark_The_Data(); ?></a>
						</div>
					</div>
				</div>
				<?php } ?>
				<?php if (Mark_Has_New()) {  ?>
				<div class="m-pager m-pager-idx box">
					<span class="prev" style="float:left;"><?php Mark_Goto_New('&larr;Prev');?>
					</span>
					<?php } ?>
					<?php if (Mark_Has_Old()) { ?>
					<span class="next" style="float:right;"><?php Mark_Goto_Old('Next&rarr;');?>
					</span>
				</div>
				<?php } }
				$fdlinks = $Mark_Config_Action['fdlinks'];
				if ($fdlinks == open) {
				 if ($Mark_Url_Action != ''){ echo "<!--------->"; 
				}else {
				 if ($Mark_Get_Type_Action == 'index') { ?>
				<div id="abc">
				    <font color="#CCCCCC">
				    <h5> 友情链接</h5>
				    </font>
				    <?php Mark_Links('&nbsp;',''); ?>
				</div><br/>
				<?php } } }  include 'footer.php'; ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>