<?php 
$titrePage="details du client";
require("include/header.php");


$Id= $_GET["id"];    // variable récupération id dans l'url
$tableclt ="clients";// variable appel table client

$sql=getById($tableclt, $Id);

$sth = $pdo->query($sql);

$RSclt =$sth->fetch(PDO::FETCH_ASSOC);

//requête pour les commandes

$tablecmd = "commandes";


getById($tablecmd, $Id);

$sth = $pdo->query($sql);

$row = $sth->fetch(PDO::FETCH_ASSOC);
?>
<div class="container-fluid">
    <div class="row">


        <!--debut detail client-->
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title"><?php  echo "test";// nom et prenom du client?></h5>
                    <p class="card-text"><?php  echo "test2";//adresse du client?></p>
                </div>
            </div>
        </div>
        <!--fin detail client-->
        <!--debut liste commandes-->

        <div class="col-md-6">






        </div>
        <!--debut liste commandes-->

    </div>
</div>

<?php
require("include/footer.php");
?>