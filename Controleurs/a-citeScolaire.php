<?php
	//A priori, pas de création d'établissement en vue, ni de cité scolaire.
	//Donc je crée un objet pour ceux en place, en dur ...
	include_once "Modele/article.php";
    include_once "Modele/type.php";
    include_once "Modele/etablissement.php";

	$unArt = new Article();
    
    if(!empty($_REQUEST['typeArt']))
    {   
        $monTypeArt = new Type();
        $monTypeArt->retrieveById($_REQUEST['typeArt']);
        $typeArt = $monTypeArt->getType();
        $monEtab = new Etablissement();
        $monEtab->retrieveById($_REQUEST["etab"]);
        $voiesConcernees = array();
        $voiesConcernees = $monEtab->getlesvoies(); //Récup des voies concernées par des articles de cet établissement

        $lesArtCiteScolaire = $unArt->findByType($typeArt,$_REQUEST["etab"]);
        $etat = "citeScolaire";
    }
    else
    {
        $etat="init";
    }
    
?>