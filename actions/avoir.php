<?php

include("../infos.php");
include("../common/sub_includes.php");

if(isset($_POST)){

	if(!isset($_SESSION)){
		session_start();
	}
	$_SESSION['prix'] = htmlspecialchars($_POST['transport']);

	}

else{
	header('Location: ../');
}


?>