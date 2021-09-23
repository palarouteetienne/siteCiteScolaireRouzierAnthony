<?php
	//A priori, pas de création d'établissement en vue, ni de cité scolaire.
	//Donc je crée un objet pour ceux en place, en dur ...
	include_once "Modele/article.php";
    include_once "Modele/type.php";

	$unArt = new Article();
    
    if(!empty($_REQUEST['typeArt']))
    {   
        $monTypeArt = new Type();
        $monTypeArt->retrieveById($_REQUEST['typeArt']);
        $typeArt = $monTypeArt->getType();

        $lesArtCiteScolaire = $unArt->findByType($typeArt,$_REQUEST["etab"]);
        $etat = "citeScolaire";
    }
    else
    {
        $etat="init";
    }
?>