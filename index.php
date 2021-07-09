<?php
$titrePage = "liste des clients";
include("include/header.php");



?>

<div class="container-fluid">
    <h1 class="text-center">nos clients</h1>

    <ul>
        <?php
        //récupération liste clients
        $clientList=$pdo->query(getAllFrom('clients'));
        $clientRow = $clientList->fetchAll(PDO::FETCH_ASSOC);

        //pour chaque client un élément de list
        foreach ($clientRow as $index=>$cl) {
            ?>
        <li id="clientList">
            <a href="detailClient.php?id=<?php echo $cl["Client_ID"];?>">
                <?php echo $cl["Client_Prenom"].' '.$cl["Client_Nom"];?>
            </a>
        </li>

        <?php
        }//fin for each

        ?>
    </ul>


</div>


<?php
include("include/footer.php");



?>