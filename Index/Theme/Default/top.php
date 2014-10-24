<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
?> 
<div class="g-hd">
  <h1 class="m-ttl">
  <a href="/"><?php Mark_Site_Name();?> </a>
  </h1>
  <p class="m-about"><?php Mark_Site_Name_Two();?></p>
  <ul class="m-nav">
    <li><a href="<?php Mark_Site_Link(); ?>/">首页</a></li>
    <?php Mark_Right('<li>','</li>'); Mark_Pages('<li>','</li>'); ?>
    <li class="m-sch">
    <a id="j-lnksch" href="#">搜索</a>
    <form id="j-schform" class="form" method="post" action="<?php Mark_keyword(); ?>">
      <input type="text" name="keyword" class="txt"/>
    </form>
    </li>
  </ul>
</div>