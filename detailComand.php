<?php
$titrePage = "Liste des commandes";
include("include/header.php");

//définition de variables
$ID = $_GET["id"]; //récupère l'ID de la commande
$textSQL=getById("commandes",$ID);//sous la variable textSQL on va chercher les commandes dans le fichier strings
$RSCommandes=$pdo->query($textSQL);//sous la variable RScommande on se connecte à la BDD et on execute la variable au dessus

?>
<table class="tableauCmdes">
    <tr>
        <th>Id Commande</th>
        <th>Date commande</th>
        <th>Client n°</th>
    </tr>
    
    <?php 
        foreach ($RSCommandes as $rowCommandes) {
            //déclaration des variables
            $commandeID=$rowCommandes["Commande_ID"];
            $commandeDate=$rowCommandes["Commande_Date"];
            $commandeClient=$rowCommandes["Commande_Client_ID"];
        
            //affichage  
    ?>
    <tr>
        <td><?php echo $commandeID;?></td>
        <td><?php echo $commandeDate;?></td>
        <td><?php echo $commandeClient;?></td>
    </tr>


<?php}?>
