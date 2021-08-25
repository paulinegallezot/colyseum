<?php

try {
  $pdo = new 
  PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'root');
  // connexion à la bdd
} catch(PDOException $ex) {
  die('pb de connexion');
}
// requête sql
$sql = "SELECT* FROM `clients` WHERE `lastName` LIKE 'M%' ORDER BY `lastName` ASC;";
// demander à PDO d'exécuter la requête passée en paramètre
$req = $pdo->query($sql);

// récupérer les données dans un tableau PHP
$mClients = $req->fetchAll();
