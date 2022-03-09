<?php


$link = mysqli_connect("localhost", "bulko", "bulko", "bulko");

if (!$link) {
	die('Erreur de connexion (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}else{
	//echo "On est bien connecté à notre base de données !<br/>";

}






 $link->set_charset("utf8");
 
 ?>