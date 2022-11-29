<!DOCTYPE html>
<html>
	<head>
		<?php include("/entete/onglet.php"); ?>
		<link href="css/cave.css" rel="stylesheet">
		<link href="css/esperance.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alex Brush" rel="stylesheet">
	</head>
	
	<body>
		<?php include("/entete/header.php"); ?>

        <div class="ardoise">
			<div class="sstitre">Vins aus verre (15cl)</div>

			<img class="trait" src="img/trait.png">

			<?php
				/** Affiche plusieurs div contenant chacune une partie */
				function partieFlex($xml, $debut, $fin)
				{
					for($i = $debut; $i < $fin; $i++)
					{
						echo "<div>";
						echo "<div class=\"sstitre\">", $xml->bar->partie[$i]->titre, "</div>";
						echo "<p>", $xml->bar->partie[$i]->contenu, "</p>";
						echo "</div>";
					}
				}

				/** Affiche une div contenant plusieurs parties */
				function partieInDiv($xml, $debut, $fin)
				{
					echo "<div>";
					for($i = $debut; $i < $fin; $i++)
					{
						echo "<div class=\"sstitre\">", $xml->bar->partie[$i]->titre, "</div>";
						echo "<p>", $xml->bar->partie[$i]->contenu, "</p>";
					}
					echo "</div>";
				}

				$xml = simplexml_load_file("info.xml");
				echo "<div id=\"flex\">";
				partieFlex($xml, 0, 2);
				partieInDiv($xml, 2, 4);
				echo "</div><img class=\"trait\" src=\"img/trait.png\"><div id=\"flex\">";
				partieFlex($xml, 4, 7);
				echo "</div><img class=\"trait\" src=\"img/trait.png\"><div id=\"flex\">";
				partieFlex($xml, 7, 9);
				echo "</div><img class=\"trait\" src=\"img/trait.png\"><div id=\"flex\">";
				partieFlex($xml, 9, 11);
				echo "</div>";
			?>
        </div>

		<?php include("/entete/footer.php"); ?>
	</body>
</html>