<?php
require("pdo.php");


$sql = "INSERT INTO produits (Produit_Nom, Produit_Image, Produit_Prix) VALUES (:nom, :image, :prix)";

$stat = $pdo->prepare($sql);

$nom = strip_tags($_POST["productName"]);
$img = strip_tags($_POST["productImgURL"]);
$prix = strip_tags($_POST["productPrix"]);



$stat->execute(array(
    ':nom' => $nom,
    ':image' => $img,
    ':prix' => $prix
));


header('location:../index.php');