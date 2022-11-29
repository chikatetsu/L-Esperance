<!DOCTYPE html>
<html>
	<head>
		<title>L'Espérance</title>
		<meta charset="utf-8">
		<link href="img/icone/logo.png" rel="shortcut icon">
		<link href="resto.css" rel="stylesheet">
		<link href="esperance.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alex Brush" rel="stylesheet">
	</head>
	
	<body>
		<!-- Bandeau -->
		<header>
			<div>
				<span class="titre"><a href="index.html" id="l_titre">L'ESPÉRANCE</a></span>
				<div class="adr"><a href="#map" id="l_adr">81 rue Saint-Martin - 91150 Etampes</a></div>
			</div>
			<div id="flex">
				<div class="sstitre"><a href="menu.html">Restauration</a></div>
				<div class="sstitre"><a href="bar.html">Bar</a></div>
				<div class="sstitre"><a href="click&collect.html">Cave à vins</a></div>
			</div>
		</header>

        <div class="ardoise">
            <?php
				function verif ()
				{
					foreach($_POST as $i=>$occ)
					if($POST[$i] == "")
					{
						echo "<p>Un problème est survenu lors de votre réservation\n";
						echo "Une ou plusieurs informations n'ont pas été rentrées\n";
						echo "<a onclick = \"history.back()\">Retour à la page de réservation</a></p>";
						return False;
					}
					return True;
				}

				function message ($info_requise, $email)
				{
					if($info_requise)
					{
						$message = $_POST["nom"] . " veut réserver une table le ";
						$message.= $_POST["jour"] . " à ";
						$message.= $_POST["heure"] . " pour ";
						$message.= $_POST["personne"] . ". \nSon numéro de téléphone est le ";
						$message.= $_POST["telephone"];

						$header = "MIME-Version: 1.0" . "\r\n";
						$header.= "From: L'Espérance <" . $email . ">\r\n";
						$header.= "Content-type: text/html; charset=utf-8" . "\r\n";

						if(mail($email, "Réservation de " . $_POST["nom"], $message, $header))
						{
							echo "<p>Votre réservation a bien été prise en compte\n";
							echo "Nous vous recontacterons en cas de besoin\n";
							echo "<a href=\"index.html\">Retour à la page d'accueil</a></p>";
						}
						else
						{
							echo "<p>Un problème est survenu lors de votre réservation\n";
							echo "Le message n'a pas pu être envoyé\n";
							echo "<a onclick = \"history.back()\">Retour à la page de réservation</a></p>";
						}
					}
				}
				
				message(verif(), "email@mail.com");
            ?>
        </div>
		
		<!-- Bandeau du bas -->
		<footer>
			<div id="flex">
				<div>
					<!-- Partie Coordonnées -->
					<div class="sstitre">Nous contacter</div>
	
					<p>
						<a href="https://www.google.com/maps?ll=48.426941,2.140391&z=15&t=m&hl=fr&gl=FR&mapclient=embed&cid=17633051484575925350">
							<img class="icone" src="img/icone/lieu.png"> 81 rue Saint-Martin 91150 Etampes
						</a>
						<a href="tel:+164940425">
							<img class="icone" src="img/icone/tel.png"> 01 64 94 04 25
						</a>
						<a href="mailto:arpino.maillard@gmail.com">
							<img class="icone" src="img/icone/mail.png"> arpino.maillard@gmail.com
						</a>
					</p>
				</div>
				
				<!-- Partie Horaire -->
				<div>
					<div class="sstitre">Horaires</div>
					<p> du Mardi au Jeudi : 10h00 - 19h00
						le Vendredi : 10h00 - 1h00
						Le Samedi : 10h00 - 17h00
					</p>
				</div>
			</div>
			
			<hr>

			<div id="flex">
				<!-- Intégration Google Maps -->
				<div>
					<a name="map">
						<iframe class="maps" allowfullscreen="" loading="lazy"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2647.5415626802624!2d2.138201815359981!3d48.42694493894185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5cbcf05912aa3%3A0xf4b52ee6bc528466!2zQ2Fmw6kgTCdFc3DDqXJhbmNl!5e0!3m2!1sfr!2sfr!4v1622195764876!5m2!1sfr!2sfr">
						</iframe>
					</a>
				</div>

				<!-- Intégration Facebook -->
				<div>
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" 
						src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0">
					</script>
					<div class="fb-page" data-href="https://fr-fr.facebook.com/esperanceetampes"
						data-tabs="timeline" data-width="500" data-height="1000" data-small-header="false"
						data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						
						<blockquote cite="https://fr-fr.facebook.com/esperanceetampes" class="fb-xfbml-parse-ignore">
							<p> Chargement de la page Facebook...
								<a href="https://fr-fr.facebook.com/esperanceetampes">https://fr-fr.facebook.com/esperanceetampes</a>
							</p>
						</blockquote>
					</div>

					<div class="social">
						<img class="img-social" src="img/icone/tripadvisor.png" usemap="#social">
					</div>
					<map name="social">
						<area shape="circle" coords="32, 32, 68"
							href="https://www.tripadvisor.fr/Restaurant_Review-g1067692-d3735158-Reviews-Cafe_de_l_Esperance-Etampes_Essonne_Ile_de_France.html">
					</map>
				</div>
			</div>
			
			<hr>

			<p> L'abus d'alcool est dangereux pour la santé. À consommer avec modération
				La vente d'alcool aux moins de 18 ans est interdite
			</p>
		</footer>
	</body>
</html>
