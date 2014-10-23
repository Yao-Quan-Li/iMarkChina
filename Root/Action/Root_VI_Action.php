<?php
/*
*All rights reserved: Yao Quan Li.
*Links:http://www.liyaoquan.cn.
*Links:http://www.imarkchina.cn.
*Date:2014.
*/
session_start();
include 'Root_Hackdone_Action.php';
function VI($content) { ?>
<script src="<?php __ROOT__('Js/VI.js'); ?>"></script>
<textarea id="mark" name="content" rows="18" cols="80" style="width: 100%"><?php
    echo htmlspecialchars($content); ?></textarea>
<?php } ?>
