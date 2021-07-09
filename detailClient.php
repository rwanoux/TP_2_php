<?php 
$titrePage="page client";
require("include/header.php");


$Id= $_GET["id"];    // variable récupération id dans l'url

$tableclt ="clients";// variable appel table client

$sql=getById($tableclt, $Id);

$sth = $pdo->query($sql);

$RSclt =$sth->fetch(PDO::FETCH_ASSOC);

//requête pour les commandes




$sql=getCommandsByClientId($Id);

$sth = $pdo->query($sql);

$result = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container-fluid">
    <div class="row">


        <!--debut detail client-->
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">
                        <?php  echo $RSclt['Client_Nom']." ".$RSclt['Client_Prenom'];// nom et prenom du client?></h5>
                    <p class="card-text"><?php  echo $RSclt['Client_Adresse'];//adresse du client?></p>
                </div>
            </div>
        </div>
        <!--fin detail client-->
        <!--debut liste commandes-->

        <div class="col-md-6">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Identifiant commande</th>
                        <th scope="col">Date de la commande</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        foreach($result as $row){
            $date= $row['Commande_Date'];
            $id = $row['Commande_ID'];
        
       ?>
                    <tr>
                        <td><a href="detailComand.php?id=<?php echo $id;?>"><?php echo $id;?></a></td>
                        <td><?php echo $date;?></td>
                    </tr>

                    <?php
        }
        ?>

                </tbody>
            </table>





        </div>
        <!--fin liste commandes-->

    </div>
</div>

<?php
require("include/footer.php");
?>