<?php 
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
include 'Head.php';
include 'Action/Root_LinksVI_Action.php';
 ?>
    <div class="span9">
     <div id="content">
    <div id="content_box">
    <form action="<?php
echo $_SERVER['REQUEST_URI']; ?>" method="post">
  <input type="hidden" name="Post_VI_Action" value=""/>
  <?php if ($succeed) {  if ($links_state == 'publish') { ?>
  <div class="updated">链接添加成功。</div>
  <?php } else { ?>
  <div class="updated">链接已保存到“草稿箱”。 <a href="Links.php?state=draft">打开草稿箱</a></div>
  <?php } } if (isset($error_msg)) { ?>
  <div class="updated"><?php echo $error_msg; ?></div>
  <?php } ?>
  <div class="admin_page_name">
  <?php if ($links_path == ''){ echo "创建链接";}else {echo "编辑链接"; }?>
  </div>
  <div>
    <input name="title" type="text" class="edit_textbox" placeholder="在此输入标题" 
    value="<?php echo htmlspecialchars($links_title); ?>"/>
  </div>
  <div>
    <input name="content" type="text" class="edit_textbox" placeholder="在此输入链接，必需以(http://)开头" 
    value="<?php echo htmlspecialchars($links_content); ?>"/>
  </div>
 <?php  if ($links_title == '') { ?>
    <input type="hidden" name="file" value="<?php echo $links_file; ?>"/>
    <input type="submit" name="save" value="添加" style="padding:6px 20px;"/><br />
    <?php } else {?>
    <input type="hidden" name="file" value="<?php echo $links_file; ?>"/>
    <input type="submit" name="save" value="修改" style="padding:6px 20px;"/><br />
    <?php } if ($links_title != '') { ?>
    <div style="float:left">
    添加时间：
    <select name="year">
      <option value=""></option>
<?php $Y_Time = date('Y', time());
    $year = substr($links_date, 0, 4);
    for ($i = 2014; $i <= $Y_Time; $i++) { ?>
      <option value="<?php  echo $i; ?>" <?php if ($year == $i) echo 'selected="selected";' ?>>
      <?php echo $i; ?></option>
<?php  } ?>
    </select> -
    <select name="month">
      <option value=""></option>
<?php    $month = substr($links_date, 5, 2);
    for ($i = 1; $i <= 12; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php echo $m; ?>" <?php if ($month == $m) echo 'selected="selected";' ?>>
      <?php echo $m; ?></option>
<?php } ?>
    </select> -
    <select name="day">
      <option value=""></option>
<?php $day = substr($links_date, 8, 2);
    for ($i = 1; $i <= 31; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php echo $m; ?>" <?php if ($day == $m) echo 'selected="selected";' ?>>
      <?php echo $m; ?></option>
<?php  } ?>
    </select>&nbsp;
    <select name="hourse">
      <option value=""></option>
<?php  $hourse = substr($links_time, 0, 2);
    for ($i = 0; $i <= 23; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php echo $m; ?>" <?php if ($hourse == $m) echo 'selected="selected";' ?>>
      <?php echo $m; ?></option>
<?php } ?>
    </select> :
    <select name="minute">
      <option value=""></option>
<?php $minute = substr($links_time, 3, 2);
    for ($i = 0; $i <= 59; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php  echo $m; ?>" <?php if ($minute == $m) echo 'selected="selected";' ?>>
      <?php echo $m; ?></option>
<?php    } ?>
    </select> :
    <select name="second">
      <option value=""></option>
<?php $second = substr($links_time, 6, 2);
    for ($i = 0; $i <= 59; $i++) {
        $m = sprintf("%02d", $i); ?>
      <option value="<?php  echo $m; ?>" <?php  if ($second == $m) echo 'selected="selected";' ?>>
      <?php  echo $m; ?></option>
<?php  } ?>
    </select>
    </div>
    <?php } if ($links_title != '') { ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    添加状态：
    <select name="state" style="width:100px;">
     <option value="publish" <?php
    if ($links_state == 'publish') echo 'selected="selected"'; ?>>发布</option>
      <option value="draft" <?php
    if ($links_state == 'draft') echo 'selected="selected"'; ?>>草稿</option>
    </select>
    <?php } ?>
</form>
    </div>
  </div>
    <?php include 'Footer.php'; ?>
</div>
</body>
</html>