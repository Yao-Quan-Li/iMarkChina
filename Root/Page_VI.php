<?php 
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
include 'Head.php';
include 'Action/Root_PageVI_Action.php';
 ?>
    <div class="span9">
     <div id="content">
    <div id="content_box">
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="hidden" name="Post_VI_Action" value=""/>
  <?php if ($succeed) {   if ($page_state == 'publish') { ?>
  <div class="updated">页面已添加。 
 <a href="<?php  echo $Mark_Config_Action ['site_link']; ?>/?<?php  echo $page_path; ?>/" target="_blank">查看页面</a></div>
  <?php  } else { ?>
  <div class="updated">页面已保存到“草稿箱”。 <a href="Page.php?state=draft">打开草稿箱</a></div>
  <?php  }  } if (isset($error_msg)) { ?>
  <div class="updated"><?php  echo $error_msg; ?></div>
  <?php } ?>
  <div class="admin_page_name">
  <?php if ($page_path == ''){  echo "创建页面";}else {echo "编辑页面"; }?>
  </div>
  <div>
    <input name="title" type="text" class="edit_textbox" placeholder="在此输入标题" value="<?php echo htmlspecialchars($page_title); ?>"/>
  </div>
  评论是否：
    <select name="can_comment" style="margin-right:16px;">
      <option value="1" <?php
if ($page_can_comment == '1') echo 'selected="selected";'; ?>>允许</option>
      <option value="0" <?php
if ($page_can_comment == '0') echo 'selected="selected";'; ?>>禁用</option>
    </select> 
    <?php  if ($page_title == '') { ?>
    <input type="hidden" name="file" value="<?php echo $page_file; ?>"/>
    <input type="submit" name="save" value="添加" style="padding:6px 20px;"/><br />
    <?php } else {?>
    <input type="hidden" name="file" value="<?php echo $page_file; ?>"/>
    <input type="submit" name="save" value="修改" style="padding:6px 20px;"/><br />
    <?php } if ($page_title != '') { ?>
    <div style="float:left">
    添加时间：
    <select name="year">
      <option value=""></option>
<?php $Y_Time = date('Y', time());
    $year = substr($page_date, 0, 4);
    for ($i = 2014; $i <= $Y_Time; $i++) { ?>
      <option value="<?php  echo $i; ?>" <?php  if ($year == $i) echo 'selected="selected";' ?>><?php   echo $i; ?></option>
<?php  } ?>
    </select> -
    <select name="month">
      <option value=""></option>
<?php  $month = substr($page_date, 5, 2);
    for ($i = 1; $i <= 12; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php  echo $m; ?>" <?php if ($month == $m) echo 'selected="selected";' ?>><?php  echo $m; ?></option>
<?php  } ?>
    </select> -
    <select name="day">
      <option value=""></option>
<?php $day = substr($page_date, 8, 2);
    for ($i = 1; $i <= 31; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php   echo $m; ?>" <?php if ($day == $m) echo 'selected="selected";' ?>><?php echo $m; ?></option>
<?php  } ?>
    </select>&nbsp;
    <select name="hourse">
      <option value=""></option>
<?php  $hourse = substr($page_time, 0, 2);
    for ($i = 0; $i <= 23; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php echo $m; ?>" <?php if ($hourse == $m) echo 'selected="selected";' ?>><?php echo $m; ?></option>
<?php  } ?>
    </select> :
    <select name="minute">
      <option value=""></option>
<?php   $minute = substr($page_time, 3, 2);
    for ($i = 0; $i <= 59; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php  echo $m; ?>" <?php if ($minute == $m) echo 'selected="selected";' ?>><?php echo $m; ?></option>
<?php  } ?>
    </select> :
    <select name="second">
      <option value=""></option>
<?php  $second = substr($page_time, 6, 2);
    for ($i = 0; $i <= 59; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php  echo $m; ?>" <?php  if ($second == $m) echo 'selected="selected";' ?>><?php echo $m; ?></option>
<?php  } ?>
    </select>
    </div>
    <?php } if ($page_title != '') { ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    添加状态：
    <select name="state" style="width:100px;">
     <option value="publish" <?php if ($page_state == 'publish') echo 'selected="selected"'; ?>>发布</option>
      <option value="draft" <?php  if ($page_state == 'draft') echo 'selected="selected"'; ?>>草稿</option>
    </select>
    <?php } ?>
     <div>
    <input name="path" type="text" class="edit_textbox" placeholder="在此输入页面路径，多级路径用半角斜杠(/)分割" value="<?php echo htmlspecialchars($page_path); ?>"/>
  </div>
  <div style="margin-bottom:20px;">
    <?php include 'Action/Root_VI_Action.php';   VI($page_content); ?>
  </div>
</form>
    </div>
  </div>
    <?php   include 'Footer.php';  ?>
</div>
</body>
</html>