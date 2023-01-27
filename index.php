<?php
include_once 'Auteur.php';
include_once 'Livres.php';

$ecrivain = new Auteur("King", "Stephen");
$livre1 = new Livre("Ca", 1986, 1138, 20, $ecrivain);
$livre2 = new Livre("Simetierre", 1983, 374, 15, $ecrivain);
$livre3 = new Livre("Le Fléau", 1978, 823, 14, $ecrivain);
$livre4 = new Livre("Shining", 1977, 447, 16, $ecrivain);

$ecrivain->afficherBibliographie();
?>