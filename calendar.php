<?php
$url = 'http://p09-calendarws.icloud.com/ca/subscribe/1/ABCDEFGHIJKLMNOPQ';
$filename = 'cristiroma.ics';

$data = file_get_contents($url);
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Access-Control-Max-Age: 1209600');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Content-Type: text/calendar');
echo $data;
