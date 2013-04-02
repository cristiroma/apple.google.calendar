<?php
ob_start();
$_GET = array('url' => 'http://www.icloud.com');
require('calendar.php');
$out = ob_get_clean();
if(strpos($out, 'iCloud') <= 0) {
  die("Test failed\n");
}

$_GET = array('url' => 'http://my-icloud.com/');
require('calendar.php');
die("Test failed\n");
