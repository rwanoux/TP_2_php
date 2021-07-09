<?php
$titrePage = "Liste des commandes";
include("include/header.php");

//définition de variables
$ID = $_GET["id"]; //récupère l'ID de la commande
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <table class="tableauCmdes">

                <?php 
                $textSQL=getById("commandes",$ID);//sous la variable textSQL on va chercher les commandes dans le fichier strings
                $RSCommandes=$pdo->query($textSQL);//sous la variable RScommande on se connecte à la BDD et on execute la variable au dessus
                $RowsCommandes=$RSCommandes->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                <thead>
                    <tr>
                        <th>Id Commande</th>
                        <th>Date commande</th>
                        <th>Client n°</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                            foreach ($RowsCommandes as $ind=>$rowCommandes) {
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
                    <?php }?>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-6">
            <table class="tableauProd">
                <?php
                $SQLprod=getProdFromCommandId($ID);
                $RSProduits=$pdo->query($SQLprod);
                $RowsProduits=$RSProduits->fetchAll(PDO::FETCH_ASSOC);
                ?>

                <thead>
                    <tr>
                        <th>Nom Produit</th>
                        <th>TTC</th>
                        <th>Prix HT</th>
                        <th>Image</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($RowsProduits as $Row){
                    ?>
                        <tr>
                            <td><?php echo $Row ["Produit_Nom"]; ?></td>
                            <td><?php echo $Row ["TTC"]; ?></td>
                            <td><?php echo $Row ["HT"]; ?></td>
                            <td><img src="img/<?php echo $Row ["Produit_Image"];?>"/></td>
                            
                            
                            
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>