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
			<div class="sstitre">Click & Collect</div>
			<?php
				$xml = simplexml_load_file("info.xml");

				foreach($xml->cave->region as $cle1=>$i)
				{
					echo "<img class=\"trait\" src=\"img/trait.png\">";
					echo "<div class=\"sstitre\">", $i->nom, "</div>";
					echo "<div id=\"flex\">";

					foreach($i->couleur as $cle2=>$j)
					{
						if($j->vin != "")
						{
							echo "<div>";
							echo "<div class=\"sstitre\" id=\"taille20\">", $j->nom, "</div>";
							echo "<p>", $j->vin, "</p>";
							echo "</div>";
						}
					}
					echo "</div>";
				}
			?>
        </div>
        
		<?php include("/entete/footer.php"); ?>
	</body>
</html>