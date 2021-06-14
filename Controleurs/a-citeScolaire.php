<?php
	//A priori, pas de création d'établissement en vue, ni de cité scolaire.
	//Donc je crée un objet pour ceux en place, en dur ...
	include_once "Modele/etablissement.php";
	$citeScolaire = new Etablissement();
    
	$citeScolaire->retrieve("IDE=".$_REQUEST['etab']);
    $etat = "citescolaire";
    
    if(!empty($_REQUEST['typeArt']))
    {
        switch($_REQUEST['typeArt'])
        {
            case "actu" :
            {
                //Récup des articles actu.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("actu"); 
                $typeArt = "Actualités";
                break;
            }
            case "inte" :
            {
                //Récup des articles internat.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("internat"); 
                $typeArt = "Internat";
                break;
            }
            case "self" :
            {
                //Récup des articles self.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("self"); 
                $typeArt = "Self";
                break;
            }
            case "insc" :
            {
                //Récup des articles inscription.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("inscription"); 
                $typeArt = "Inscription";
                break;
            }
            case "bour" :
            {
                //Récup des articles bourses.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("bourses"); 
                $typeArt = "Bourses";
                break;
            }
            case "info" :
            {
                //Récup des articles bourses.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("information"); 
                $typeArt = "informations Patiques";
                break;
            }
            case "form" :
            {
                //Récup des articles bourses.
                $lesArtCiteScolaire = $citeScolaire->getLesArticlesDeType("formation"); 
                $typeArt = "Formations";
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