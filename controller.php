<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
		
		$host = "localhost";
		$usernom = "bulko";
		$password = "bulko";
		$database = "bulko";

		$nom = $_POST["nom"]; 
		$mail = $_POST["mail"];
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

        if (!isset($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)){
			die("S'il vous plaît veuillez entrez une adresse e-mail correcte.");
		}	

        $mysqli = new mysqli($host, $usernom, $password, $database);
        if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}	
        $statement = $mysqli->prepare("INSERT INTO utilisateurs (nom, mail, phone, message) VALUES(?, ?, ?, ?)"); 
        $statement->bind_param('ssss', $nom, $mail, $phone, $message); 


        if($statement->execute()){
			print "Salut " . $nom . "!, votre adresse e-mail est ". $mail . " et ton numéro est ".$phone;
		}else{
			print $mysqli->error; 
		}
	}
?>
