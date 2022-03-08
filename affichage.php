<html lang="fr">
<!-- HEAD START -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 



</head>

<body>

    <?php
    include("connexion.php");
    include("resultat.php");
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $mon_tableau_de_utilisateurs = utilisateurs::select_id($id);

} else {
    $mon_tableau_de_utilisateurs = utilisateurs::select_utilisateurs();
}

?>

<div>
<?php
$i = 0;
    while ($i < count($mon_tableau_de_utilisateurs)) {
        ?>
        <div id="tableauperso">
            <h2 class="nomperso"> <?php echo $mon_tableau_de_utilisateurs[$i]['nom']; ?></h2>
            <p class="presentation"><?php echo $mon_tableau_de_utilisateurs[$i]['mail']; ?></p>
            <p><?php echo $mon_tableau_de_utilisateurs[$i]['phone']; ?></p>
            <p><?php echo $mon_tableau_de_utilisateurs[$i]['message']; ?></p>


        </div>

        <?php $i++;
    } 


?>

</div>
</html>