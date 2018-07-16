<?php
$time =time();
$actual_time=date('D M Y @ H:i:s', $time);     //this will provide us the time
require 'ip_addr.php';
echo 'the actual time = ',$actual_time;   
?>