<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/?> 
<div id="top">
	<div class="bloginfo">
		<div class="topava">
			<div class="avawrapper">
			</div>
		</div>
		<div class="clear">
		</div>
	</div>
	<div class="label">
		<a href="/" class="title"><?php    Mark_Site_Name();?></a>
		<div class="selfintro"><?php Mark_Site_Name_Two();?></div>
		<div class="searchform">
			<form action="<?php Mark_keyword(); ?>" method="post">
				<a href="<?php Mark_Site_Link(); ?>/">首页</a>
				<?php Mark_Right('<span class="seperator"></span>'); Mark_Pages('<span class="seperator"></span>'); ?><span class="seperator"></span>
				<input type="text" name="keyword" value="" id="searchinput"/>
			</form>
		</div>
	</div>
</div>