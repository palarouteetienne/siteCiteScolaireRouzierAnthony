<?php
    include ('Modele/article.php');
    include ('Modele/type.php');
    include ('Modele/voie.php');

    $etat = "modifierArticle";

    $lArticle = new Article();
    $lesRessources = array();
    $leType = new Type();
    $laVoie = new Voie();

    $lArticle->retrieveById($_REQUEST['ida']);
    $lesRessources = $lArticle->getLesRessources();
    $lesTypes = $leType->findAll();
    $lesVoies = $laVoie->findAll();
?>