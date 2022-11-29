<!DOCTYPE html>
<html>
	<head>
		<?php include("/entete/onglet.php"); ?>
		<link href="css/resto.css" rel="stylesheet">
		<link href="css/esperance.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alex Brush" rel="stylesheet">
	</head>
	
	<body>
		<?php include("/entete/header.php"); ?>

        <div class="ardoise">
            <div class="sstitre">À la carte</div>

			<img class="trait" src="img/trait.png">

			<?php
				$xml = simplexml_load_file("info.xml");

				foreach($xml->restauration->partie as $cle=>$i)
				{
					echo "<div class=\"sstitre\">", $i->titre, "</div>";
					echo "<p>", $i->contenu, "</p>";
					echo "<img class=\"trait\" src=\"img/trait.png\">";
				}
			?>

			<div class="sstitre" id="reserv">
				<a class="bouton" href="reservation.php"> Réserver une table </a>
			</div>
        </div>

		<?php include("/entete/footer.php"); ?>
	</body>
</html>