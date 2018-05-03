<?php

	$sexe=isset($_POST['sexe'])?$_POST['sexe']:'';
	$nom=isset($_POST['nom'])?$_POST['nom']:'';
	$prenom=isset($_POST['prenom'])?$_POST['prenom']:'';
	$naissance=isset($_POST['naissance'])?$_POST['naissance']:'';
	$email=isset($_POST['email'])?$_POST['email']:'';
	$mdp=isset($_POST['mdp'])?$_POST['mdp']:'';
	$description=isset($_POST['description'])?$_POST['description']:'';

    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    $database='linkedin';
    $db_handle=mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die(erreur1);
    $db_found=mysqli_select_db($db_handle,$database) or die(erreur2);

    if($db_found)
    {
        

        $sql1 ="INSERT INTO membre(sexe,nom,prenom,naissance,email,mdp,description)VALUES('$sexe','$nom','$prenom','$naissance','$email','$mdp','$description')";

        $result = mysqli_query($db_handle,$sql1);

        header ('Location:index.php?page=login');
    }
        
    while($data=mysqli_fetch_assoc($result)){

            echo"Sexe : ".$data["sexe"]."<br>";
            echo"Nom : ".$data["nom"]."<br>";
            echo"Prenom : ".$data["Prenom"].'<br>';
            echo"Naissance : ".$data["naissance"]."<br>";
            echo"email : ".$data["email"]."<br>";
            echo"mot de passe : ".$data["mdp"]."<br>";
            echo"description : ".$data["description"]."<br>";
            echo"<br>";
    }    
    
    
?>