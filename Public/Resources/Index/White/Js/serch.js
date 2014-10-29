/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
$(document).ready(function(){if($.browser.msie&&$.browser.version==="10.0"){$("html").addClass("ie10")}if($.browser.msie&&$.browser.version==="6.0"){mkhover(".m-nav li","hover")}$("#j-lnksch").bind("click",function(){$(this).hide();$("#j-schform").show().find(".txt").focus();return false});$("#j-schform .txt").bind("blur",function(){$("#j-schform").hide();$("#j-lnksch").show();return false});$(".m-pager-idx .active").bind("click",function(){return false})});function mkhover(b,a){$(b).hover(function(){$(this).addClass(a)},function(){$(this).removeClass(a)})};