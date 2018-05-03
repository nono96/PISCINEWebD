 $sql = "INSERT INTO membre('sexe','nom','prenom','naissance','email','mdp','description')
	VALUES('$sexe','$nom','$prenom','$naissance','$email','$mdp','$description')";


<?php
//identifier le nom de base de données
 $database = "linkedin";
//connecter l'utilisateur dans BDD
//votre serveur = localhost | votre login = root | votre mot de pass = ‘’ (rien)
 $db_handle = mysqli_connect('localhost', 'root', '');
 $db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement
 if ($db_found) {
 
 echo "connexion ok";
 
 $result = mysqli_query($db_handle, $sql);
 
 while ($data = mysqli_fetch_assoc($result)) {
 echo "ID: " . $data['id'] . '<br>';
 echo "SEXE: " . $data['sexe'] . '<br>';
 echo "Nom:" . $data['nom'] . '<br>';
 echo "Prénom: " . $data['prenom'] . '<br>';
 echo "Date de naissance: " . $data['naissance'] . '<br>';
 echo "Email: " . $data['email'] . '<br>';
 echo "Mot de passe: " . $data['mdp'] . '<br>';
 echo "Description: " . $data['description'] . '<br>';
 }//end while

 }//end if
//si le BDD n'existe pas
 else {
 echo "Database not found";
 }//end else
//fermer la connection
mysqli_close($db_handle);
?> 

<?php
//identifier le nom de base de données
$database = "linkedin";
//connecter l'utilisateur dans BDD
//votre serveur = localhost | votre login = root | votre mot de pass = ‘’ (rien)

 $db_handle = mysqli_connect('localhost', 'root', '');
 $db_found = mysqli_select_db($db_handle, $database);
 

 //ft qui inscrit l'utilisateur
function inscrire_utilisateur($sexe,$nom,$prenom,$naissance,$email,$mdp,$description)
{
	mysql_query("INSERT INTO membre(sexe,nom,prenom,naissance,email,mdp,description)
	VALUES('$sexe','$nom','$prenom','$naissance','$email','$mdp','$description')") or die(mysql_error());
}
?> 