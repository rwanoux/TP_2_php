<?php

define("USER", "root");
define("PASS", "root");
define("BDD", "aden-bdd7");
define("SERVER", "localhost");


try {
    $dbh = new PDO('mysql:host='.SERVER.';dbname='.BDD.','.USER.', '.PASS);
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>