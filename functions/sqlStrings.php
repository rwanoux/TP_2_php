<?php


function getAllFrom($table){

return "SELECT * FROM ".$table;
}


function getById($table, $Id){
    $sql;
    switch ($table){
        case "clients":
            $sql= "SELECT * FROM clients WHERE Client_Id =".$Id;
            break;
        
        case "cmd_pdt":
            $sql= "SELECT * FROM cmd_pdt WHERE Cmd_pdt_ID =".$Id;

            break;
        case "produits":
            $sql= "SELECT * FROM produits WHERE Produit_ID =".$Id;

            break;

         case "commandes":
            $sql= "SELECT * FROM commandes WHERE Commande_Id =".$Id;
             break;

    }
    return $sql;

 
}
function getCommandsByClientId($clientId){
    return "SELECT * FROM commandes WHERE Commande_Client_ID ='".$clientId."'";
} 
function" getProdFromCommandId"($comId){

    return "SELECT produits.Produit_Nom, produits.Produit_Image, produits.Produit_Prix AS TTC, produits.Produit_Prix*0.8 AS HT 
    FROM  cmd_pdt, produits WHERE produits.Produit_ID=cmd_pdt.Cmd_Pdt_Produit_ID AND cmd_pdt.Cmd_Pdt_Commande_ID=".$comId;
}
?>