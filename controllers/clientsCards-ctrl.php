<?php

try {
  $pdo = new 
  PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root', 'root');
  // connexion à la bdd
} catch(PDOException $ex) {
  die('pb de connexion');
}
// requête sql
$sql = "SELECT
`lastName`,
`firstName`,
DATE_FORMAT(`birthDate`,'%d/%m/%Y') AS birthDate,
c.`cardNumber`,
`cardTypesId` AS ct,
`card`,
ct.`type`,
IF(ct.`type` = 'fidélité', 'oui', 'non') AS hasCard
FROM
`clients`
LEFT JOIN `cards` AS c USING(`cardNumber`)
LEFT JOIN `cardtypes` ct ON
c.cardTypesId = ct.`id`";
// demander à PDO d'exécuter la requête passée en paramètre
$req = $pdo->query($sql);
// récupérer les données dans un tableau PHP
$clientsCards = $req->fetchAll();
