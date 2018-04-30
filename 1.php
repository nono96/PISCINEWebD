<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<h1>Formulaire</h1>
	</head>
	
	<body>
		<form method="POST" action="1traitement.php">
			<p>Login :</p>
			<input type="text" name="identifiant" />
			<p>Mot de Passe:</p>
			<input type="password" name="password"/>
			
			<p>Age :</p>
			<select name="age">
				<option value="moins4">Moins de 4 ans</option>
				<option value="entre4et18">4 - 18 ans</option>
				<option value="entre18et25">18 - 25 ans</option>
				<option value="entre25et60">25 - 60 ans</option>
				<option value="Plusde60ans">60 ans et plus</option>
			</select>

			<p>Choix du forfait :</p>

			
       
       <input type="radio" name="hebdomadaire" value="hebdomadaire" id="hebdomadaire" /> <label for="hebdomadaire">hebdomadaire</label><br />

		<input type="radio" name="mensuel" value="mensuel" id="mensuel" /> <label for="mensuel">mensuel</label><br />

		<input type="radio" name="annuel" value="annuel" id="annuel" /> <label for="annuel">annuel</label><br />




			<br><br><br>
			<input type="submit" value="Valider" name="sub"/>
		</form>
	</body>
</html>