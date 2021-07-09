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


?>