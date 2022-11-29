<!DOCTYPE html>
<html>
	<head>
		<?php include("/entete/onglet.php"); ?>
		<link href="css/accueil.css" rel="stylesheet">
		<link href="css/esperance.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alex Brush" rel="stylesheet">
	</head>
	
	<body>
		<?php include("entete/header.php"); ?>

		<!-- Partie Restauration -->
		<div class="ardoise">
			<div class="sstitre">Le Plat du Jour</div>
			<div id="flex">
				<?php
					//Trouve le plat du jour à afficher
					date_default_timezone_set("Europe/Paris");
					$jour = date('w');
					if($jour == 0 || $jour == 1)
						$jour = 0;
					else
						$jour-=2;

					$xml = simplexml_load_file("info.xml");
					$work= $xml->index->jour[$jour];
					
					//Affiche les informations
					echo "<div><img class=\"plat\" src=\"", $work->image, "\">";
					echo "<p>\n", $work->plat, "\n", $work->prix, "</p>";
					echo "</div><div><div class=\"sstitre\">Cette semaine</div><p>";

					foreach($xml->index->jour as $cle=>$i)
					{
						echo $i->nom, "\n", $i->plat, "\n\n";
					}

					echo "<p/></div>";
				?>
			</div>
			
			<div id="flex">
				<div class="sstitre" id="reserv">
					<a class="bouton" href="reservation.php"> Réserver une table </a>
				</div>
				<div class="sstitre" id="reserv">
					<a class="bouton" href="menu.php"> Voir le Menu </a>
				</div>
			</div>
		</div>

		<!-- Partie Cave -->
		<div class="ardoise">
			<div class="sstitre"> Le Vin du moment</div>

			<?php
				$xml = simplexml_load_file("info.xml");
				$work= $xml->index->vin;

				echo "<img class=\"plat\" src=\"", $work->image, "\">";
				echo "<p>\n", $work->nom, "\n", $work->prix, "</p>";
			?>

			<div id="flex">
				<div class="sstitre" id="reserv">
					<a class="bouton" href="click&collect.php"> Click & Collect </a>
				</div>
				<div class="sstitre" id="reserv">
					<a class="bouton" href="bar.php"> Bar à Vin </a>
				</div>
			</div>
		</div>

		<?php include("entete/footer.php"); ?>
	</body>
</html>