<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
		
		$host = "localhost";
		$usernom = "bulko";
		$password = "bulko";
		$database = "bulko";
        //var_dump ($_POST);
		$nom = $_POST["nom"]; 
        if(isset($_POST['mail'])&&!empty($_POST['mail'])){$mail = $_POST["mail"];} else {$mail=null;}
		//var_dump($mail);
		$phone = $_POST["phone"];
        $message = $_POST["message"];

		if (!isset($nom)){
			die("S'il vous plaît entrez votre nom");
		}

		
        function validate_phone_number($phone)
{

        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT); 
        if (strlen($filtered_phone_number) < 10) {
            return false;
        } else {
        return true;
        }
    }
        if (validate_phone_number($phone) == true) {
            //echo "le numéro est bon";
        } else {
        echo "Numéro de téléphone incorrect";
        }
        
//pour rendre l'email non obligatoire, je vérifie si il est valide que si il est saisi
        if (isset($mail)){
            if( !filter_var($mail, FILTER_VALIDATE_EMAIL)){
			    die("S'il vous plaît veuillez entrez une adresse e-mail correcte.");
		    }
        }else {
            $mail="";//pour insérer un email vide
        }
        
        $mysqli = new mysqli($host, $usernom, $password, $database);
        if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}	
        $statement = $mysqli->prepare("INSERT INTO utilisateurs (nom, mail, phone, message) VALUES(?, ?, ?, ?)"); 
        $statement->bind_param('ssss', $nom, $mail, $phone, $message); 


        if($statement->execute()){
			print "Salut " . $nom . ", ton adresse e-mail est ". $mail . " et ton numéro est ".$phone;
		}else{
			print $mysqli->error; 
		}
	}
?>
<!DOCTYPE html>
<html lang="fr">
    <body>
        <a href="http://localhost/bulko/affichage.php">Voir les réponses des autres participants</a>
</body>
</html>