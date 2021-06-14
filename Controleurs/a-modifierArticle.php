<?php
include ('Modele/article.php');
include ('Modele/ressource.php');

$etat = "modifierArticle";

$lArticle = new Article();
$lesRessources = array();

$lArticle->retrieveById($_REQUEST['ida']);
$lesRessources = $lArticle->getLesRessources();

?>