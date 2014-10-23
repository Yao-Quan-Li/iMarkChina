<?php 
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/ 
include 'Head.php'; 
?>  
<div class="span9">
      <div class="hero-unit">
        <h3>Successful Landing Welcome Home ! </h3>
        <p> 感谢你的使用,你可以... </p>
        <p> <a href="Post_VI.php" class="btn btn-primary btn-large">发布一篇日志</a> 
        <a href="Page_VI.php" class="btn btn-large">创建一个页面</a> </p>
           日志:
    <div class="progress">
      <span class="red" style="width:<?php Mark_The_Styel_Post(); ?>%;">
      <span><?php Mark_The_Styel_Post(); ?>%</span></span>
    </div>
     月分:
    <div class="progress">
     <span class="green" style="width:<?php Mark_The_Styel_Date(); ?>%;">
     <span><?php Mark_The_Styel_Date(); ?>%</span></span>
    </div>
    标签:
    <div class="progress">
    <span class="orange" style="width: <?php Mark_The_Styel_Tags(); ?>%;">
    <span><?php Mark_The_Styel_Tags(); ?>%</span></span>
    </div>
      </div>
     <?php include 'Footer.php'; ?>
    </div>
  </div>
</div>
</body>
</html>