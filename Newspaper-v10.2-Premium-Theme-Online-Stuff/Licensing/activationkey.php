<?php
$s_id = "9309a6b2ba8b095f1082ff8946b9ccb0"; // add here your server id
$e_id = "22f1d2c2-11b1-2222-a1cc-222cbfa1b11e"; // envato fake purchase code, can be like this format
$t_id = md5($s_id . $e_id);
echo $t_id;
?>