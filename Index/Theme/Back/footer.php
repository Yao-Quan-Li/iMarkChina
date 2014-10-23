<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/?>
<div class="bottom">
	<p>© CopyRight  2014 | <?php Year(); ?><?php Copy_Right(); ?> | <a href="#">Top</a></p>
</div>
<script type="text/javascript" src="<?php __Index__('Back/Js/jquery-1.6.2.min.js'); ?>"></script>
<script type="text/javascript">
		$.easing.easeOutQuint = function (x, t, b, c, d, s) {return c*((t=t/d-1)*t*t*t*t + 1) + b;};
		$(document).ready(function(){
			var bloginfo = $("#top").find(".bloginfo");
			$("#aboutmebtn").toggle(function(){
				$("#top").animate({marginTop: "0px"}, 1000, "easeOutQuint");
				bloginfo.slideDown();
			},function(){
				$("#top").animate({marginTop: "-188px"}, 1000, "easeOutQuint");
			});
			$("#searchinput").focus(function(){
				if($(this).val() == "搜索") $(this).val("");
			});
			$("#searchinput").blur(function(){
				if($(this).val() == "") $(this).val("搜索");
			});
			if($("#searchinput").val() == "") $("#searchinput").val("搜索");
		});
	</script>
<script src="<?php __Index__('Back/Js/ntes.js');?>" type="text/javascript"></script>