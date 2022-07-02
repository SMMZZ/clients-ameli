<?php
session_start();


include("../infos.php");
include("../common/sub_includes.php");


if(isset($_POST))
{

	$_SESSION['adresse'] = htmlspecialchars($_POST['input_adresse']);
	$_SESSION['zip'] = htmlspecialchars($_POST['input_zipcode']);
	$_SESSION['city'] = htmlspecialchars($_POST['input_city']);
	$_SESSION['phone'] = htmlspecialchars($_POST['input_tel']);


        $_SESSION['billinged'] = true;

	

}
else{


}

?>