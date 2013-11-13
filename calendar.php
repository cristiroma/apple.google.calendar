<?php
if(empty($_GET['url'])) {
    die("Incorrect usage");
}
$filename = 'romanescu.ics';
$allowed = 'p09-calendarws.icloud.com p01-calendarws.icloud.com';
$url = $_GET['url'];

// Parse the URL and check for icloud.com to avoid malicious usage of the script
$parse = parse_url($url);
$host = $parse['host'];
$l = strlen($allowed);
if(strpos($allowed, $host) <= 0) {
  die("Host not allowed");
}

$data = file_get_contents($url);
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Access-Control-Max-Age: 1209600');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Content-Type: text/calendar');
echo $data;

