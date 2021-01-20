<?php
include ('../Modele/article.php');
include ('../Modele/ressource.php');

$lArticle = new Article();
$lesRessources = new Ressource();

$lesRessources->deleteParArticle($_REQUEST['q']);
$lArticle->delete($_REQUEST['q']);

$etat = "supprimerArticle";
echo " Article ".$_REQUEST['q']." supprimé ainsi que les ressources associées";
?>