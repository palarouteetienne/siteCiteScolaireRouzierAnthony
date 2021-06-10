<?php
	//A priori, pas de création d'établissement en vue, ni de cité scolaire.
	//Donc je crée un objet pour ceux en place, en dur ...
	include_once "Modele/etablissement.php";
	$citeScolaire = new Etablissement();
	$typeArt = $_REQUEST['typeArt'];
    echo$_REQUEST['typeArt'];

	$citeScolaire->retrieve("IDE=4");
    $etat = "citescolaire";
    
    if(!empty($_REQUEST['typeArt']))
    {
        switch($_REQUEST['typeArt'])
        {
            case "actu" :
            {
                //Récup des articles actu.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("actu"); 
                break;
            }
            case "inte" :
            {
                //Récup des articles internat.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("internat"); 
                break;
            }
            case "self" :
            {
                //Récup des articles self.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("self"); 
                break;
            }
            case "insc" :
            {
                //Récup des articles inscription.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("inscription"); 
                break;
            }
            case "bour" :
            {
                //Récup des articles bourses.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("bourses"); 
                break;
            }
            default :
            {
                //Revenir à la page d'accueil.
                $etat = "init";
                break;
            }
        }
    }

?>