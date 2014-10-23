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
                <div class="m-post m-post-img ">
                    <div class="postinner">
                        <div class="ct">
                            <div class="ctc box">
                                <div class="text">
                                    <p><?php Mark_The_Link(); ?><br/><br/><?php Mark_The_Des(); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="more box">
                            <span class="circle">&nbsp;</span>
                            <a class="date" href="<?php Mark_The_Url(); ?>"><span class="arr">&nbsp;</span>
                            <span class="txt"><?php Mark_The_Data(); ?> </span></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="m-pager m-pager-idx">
                <div class="more box">
                    <span class="circle">&nbsp;</span>
                </div>
                <div class="pagerc box">
                    <?php if (Mark_Has_New()) {  ?>
                    <span class="prev" style="float:left;"><?php Mark_Goto_New('&larr;Prev');?>
                    </span>
                    <?php } ?>
                    <?php if (Mark_Has_Old()) { ?>
                    <span class="next" style="float:right;"><?php Mark_Goto_Old('Next&rarr;');?>
                    </span>
                    <?php } }  ?>
                </div>
            </div>
        </div>
    </div>
    <?php
$fdlinks = $Mark_Config_Action['fdlinks'];
if ($fdlinks == open) {
 if ($Mark_Url_Action != ''){ echo "<!--------->"; 
}else {
 if ($Mark_Get_Type_Action == 'index') { ?>
<div id="abc">
    <font color="#CCCCCC">
    <h5> 友情链接</h5>
    </font>
    <?php Mark_Links('<li>','</li>'); ?>
</div><br/>
<?php } } }?>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>