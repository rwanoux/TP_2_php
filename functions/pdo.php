<?php

define("USER", "root");
define("PASS", "root");
define("BDD", "aden-bdd7");
define("SERVER", "localhost");


try {
    $pdo = new PDO("mysql:host=".SERVER.";dbname=".BDD.";charset=utf8", USER, PASS);
   
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>