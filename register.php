<h1>Deviens membre</h1><br/>

<?php
	
	if(isset($_POST['submit']))
	{
		echo $sexe=$_POST['sexe'].'</br>';
		echo $nom=$_POST['nom'].'</br>';
		echo $prenom=$_POST['prenom'].'</br>';
		echo $naissance=$_POST['naissance'].'</br>';
		echo $email=$_POST['email'].'</br>';
		echo $mdp=$_POST['mdp'].'</br>';
		echo $description=$_POST['description'].'</br>';

		
		
		if(empty($nom))
		{
			$errors[]="veuillez saisir votre nom";
		}

		if(empty($prenom))
		{
			$errors[]="veuillez saisir votre prenom";
		}

		if(empty($naissance))
		{
			$errors[]="veuillez saisir votre date de naissance";	
		}

		/*if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$errors[]="Format de l'email non compatible";
		}*/

		if(empty($email))
		{
			$errors[]="veuillez saisir votre email";	
		}


		if(empty($mdp))
		{
			$errors[]="veuillez saisir votre mot de passe";	
		}

		/*if($mdp != $repeatmdp)
		{
			$errors[]="Les 2 mdp doivent être identiques";	
		}*/

		
	

		if(!empty($errors))
		{
			foreach($errors as $error)  
			{
				echo "<div class='error'>".$error."</div>";
			}
		}
		
		
	}
?>

<form method='POST' action='fonctions.php'>

	
	<label for='sexe'>Sexe</label>

	<select name="sexe">
		<?php echo isset($sexe)?'<option value='.$sexe.'>'.$sexe.'</option>':'';?>
		<?php echo $sexe !='homme'?'<option value="homme">Homme</option>' :'';?>
		<?php echo $sexe !='femme'?'<option value="femme">Femme</option>' :'';?>
	</select><br/><br/>


	<label for="nom">Nom:</label>
	<input type="text" name="nom"/><br/>

	<label for="prenom">Prenom:</label>
	<input type="text" name="prenom"/><br/>

	<label for="naissance">Date de naissance:</label>
	<input type="date" name="naissance"/><br/>

	<label for="email">Email:</label>
	<input type="text" name="email"/><br/>

	<label for="mdp">Mot de passe:</label>
	<input type="password" name="mdp"/><br/>

	<label for="repeatmdp">Confirmation du mot de passe:</label>
	<input type="password" name="repeatmdp"/><br/>

	

	<label for="description">Description</label>
	<textarea rows="6" cols="30" name="description"></textarea><br/>

	<input type="submit" value="S'Inscrire" name="submit"/>


</form>

<a href='index.php?page=login'>Aller a la page de connexion</a>