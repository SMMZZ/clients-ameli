<?php
ob_start();


include("../infos.php");
include("../common/sub_includes.php");

if(isset($_POST["error_submit"])){


    header('Location: ../steps/billing.php');

    
}