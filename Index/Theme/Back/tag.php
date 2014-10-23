<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
?>
<div class="post photopost">
	<div class="info">
		<?php if (Mark_Is_Tag()) { ?>
		<p> 与 <font color="#009900">
		<strong><?php Mark_Tag_Name(); ?></strong></font>相关的日志:</p>
		<?php } elseif (Mark_Is_Date()) { ?>
		<p><font color="#009900">
		<strong><?php Mark_Date_Name(); ?></strong></font>&nbsp发表的全部日志:</p>
		<?php  } ?>
	</div>
</div>