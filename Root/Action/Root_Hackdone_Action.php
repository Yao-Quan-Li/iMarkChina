<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/ 
if (!isset($_SESSION['Mark_Login'])) {
    echo "<title>How crazy is it?</title>";
    echo "<meta charset=\"UTF-8\" />";
    echo "<style type=\"text/css\">
a {text-decoration:none;color:#426DC9;}
#shit {font-size: 100px;margin-top: 150px;}
#fontt {	font-family: Arial, Helvetica, sans-serif;	font-size: 18px;}</style>";
echo "<div id=\"shit\">
⊙﹏⊙‖∣°
</div>
<br />
  <br />
<span id=\"fontt\"> 
Oh,Shit !!! Where are they go ?.<br /><br />
One last thing?.<br /><br />
Are you very sure you're the Root?.<br /><br />
Are You....????.....<br /><br />
<a href=\"/root.php\">Yes,I'm.</a>&nbsp;&nbsp;&nbsp;<a href=\"/\"> No,I change my mind.</a>
</span>";
die;
}
if (@$_GET['getout'] == 'logout') {
    session_start();
    session_destroy();
    header("location:Blog_System_Login.php");
}
?>