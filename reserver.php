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
		
		<?php include("footer.php"); ?>
	</body>
</html>