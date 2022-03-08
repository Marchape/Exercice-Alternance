<?php 
    include("connexion.php");




?>
<!DOCTYPE html>
<html lang="fr">
<!-- HEAD START -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Bulko</title>


</head>

<body>

    <header>
        <img src="img/logoBulko.png" alt="logo bulko" id="logo"/>
        <a href="http://bulko/affichage.php" id="contact">CONTACT</a>
        <a href="#" alt="Réseaux sociaux" id="rs"><img src="img/reseauxSociaux.png" /></a>
        
    </header>

    <div id="formulaire"> 
        <form method="post" action="controller.php">
            <div id="cg">
                <input type="text" id="name" name="nom" placeholder="Nom"> <br/>
                <input type="text" id="mail" name="mail" placeholder="Mail"><br/>
                <input type="text" id="phone" name="phone" placeholder="Téléphone"><br/>
            </div>
            <div id="cd">
                    <textarea id="message" name="message" placeholder="Message" rows="7" cols="25"></textarea><br/>
                    <input type="submit" id="bouton" name="bouton" value="ENVOYER"/>
            </div>
        </form>
        

    </div>

    <footer>
    </footer>



</body>
</html>