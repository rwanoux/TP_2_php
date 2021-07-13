<?php

require("include/header.php");

?>
<div>

    <table>

        <?php
        $textSQL = getAllFrom("produits"); //sous la variable textSQL on va chercher les commandes dans le fichier strings
        $RSProd = $pdo->query($textSQL); //sous la variable RScommande on se connecte à la BDD et on execute la variable au dessus
        $RowsProd = $RSProd->fetchAll(PDO::FETCH_ASSOC);

        foreach ($RowsProd as $ind => $rowCommandes) {
            //déclaration des variables
            $commandeID = $rowCommandes["Produit_Nom"];
            $commandeDate = $rowCommandes["Produit_Prix"];
            $commandeClient = $rowCommandes["Produit_Image"];

            //affichage  
        ?>
        <tr>
            <td><?php echo $commandeID; ?></td>
            <td><?php echo $commandeDate; ?></td>
            <td><?php echo $commandeClient; ?></td>
        </tr>


        <?php } ?>
    </table>
</div>
<?php

require("include/footer.php");

?>