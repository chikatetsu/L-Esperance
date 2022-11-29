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
			<form action="reserver.php" method="POST">
				<div>
					<label>Jour à réserver</label>
					<input name="jour" type="date">
				</div>
				<div>
					<label>Heure de réservation</label>
					<select name="heure">
						<option>--h--</option>
						<option value="10h00">10h00</option>
						<option value="10h30">10h30</option>
						<option value="11h00">11h00</option>
						<option value="11h30">11h30</option>
						<option value="12h00">12h00</option>
						<option value="12h30">12h30</option>
						<option value="13h00">13h00</option>
						<option value="13h30">13h30</option>
						<option value="14h00">14h00</option>
						<option value="14h30">14h30</option>
						<option value="15h00">15h00</option>
						<option value="15h30">15h30</option>
						<option value="16h00">16h00</option>
						<option value="16h30">16h30</option>
						<option value="17h00">17h00</option>
						<option value="17h30">17h30</option>
						<option value="18h00">18h00</option>
						<option value="18h30">18h30</option>
					</select>
				</div>
            	<div>
					<label>Pour combien de personnes</label>
					<input name="personne" type="number">
				</div>
				<div>
					<label>Votre nom</label>
					<input name="nom" type="text">
				</div>
				<div>
					<label>Votre numéro de téléphone</label>
					<input name="telephone" type="tel">
				</div>
				<div>
					<button type="submit"> Faire une réservation </button>
				</div>
			</form>
        </div>
		
		<?php include("/entete/footer.php"); ?>
	</body>
</html>