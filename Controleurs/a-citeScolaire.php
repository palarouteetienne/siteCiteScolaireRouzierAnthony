<?php
	//A priori, pas de création d'établissement en vue, ni de cité scolaire.
	//Donc je crée un objet pour ceux en place, en dur ...
	include_once "Modele/article.php";
	$unArt = new Article();
    
    if(!empty($_REQUEST['typeArt']))
    {
        $lesArtCiteScolaire = $unArt->findByType($_REQUEST['typeArt']);
        $etat = "citescolaire";
        
        switch($_REQUEST['typeArt'])
        {
            case "actu" :
            {
                $typeArt = "Actualités";
                break;
            }
            case "inte" :
            {
                $typeArt = "Internat";
                break;
            }
            case "self" :
            {
                $typeArt = "Self";
                break;
            }
            case "insc" :
            {
                $typeArt = "Inscription";
                break;
            }
            case "bour" :
            {
                $typeArt = "Bourses";
                break;
            }
            case "info" :
            {
                $typeArt = "informations Patiques";
                break;
            }
            case "form" :
            {
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
    else
    {
        $etat="init";
    }

?>