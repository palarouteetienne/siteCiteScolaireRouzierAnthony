<?php
// On teste le cas où l'utilisateur est déjà connecté
// C'est à dire que l'on arrive ici depuis une page d'administration
// (page de saisie des articles par exemple)
if 
(
    isset($_SESSION['emailu']) && 
    !empty($_SESSION['emailu'])
) 
{
    //echo 'eeee';
    require_once 'Modele/etablissement.php';
    require_once 'Modele/utilisateur.php';
    require_once 'Modele/associe.php';

    $unEtablissement = new Etablissement();
	$lesAssocies = array();
	
	$unUtilisateur = new Utilisateur();
	$unUtilisateur->retrieve("MAILU='".$_SESSION['emailu']."'");

    $associe = new Associe();
    
    // On appelle la méthode "findAllBy($condition) de la classe associe"
    $lesAssocies = $associe->findAllBy("IDU =".$unUtilisateur->getidu());

    switch ($_SESSION['emailu']) 
    {
        // En fonction du nom, on récupères les établissements associés
        case 'administrateur@citeScolaire.fr':
            $etat = 'choixEtablissement';
			break;
		case 'college.ej@citescolaire.com':
            $etat = 'choixEtablissement2';
			break;
		case 'lycee.ej@citescolaire.com':
            $etat = 'choixEtablissement3';
			break;
		case 'lycee.jj@citescolaire.com':
            $etat = 'lyceeJJ';
			break;
		case 'cite.scolaire@citescolaire.com':
            $etat = 'citeScolaire';
            break;
    }
}
else 
{
    // isset (regarde si la variable est définie), !empty (si la variable n'est pas vide)
    if 
    ( 
        isset($_POST['submit']) && 
        !empty($_POST['emailu']) && 
        !empty($_POST['mdpu'])
    ) 
    {
        require 'Modele/utilisateur.php';
       // echo 'else if';
        // On récup les valeurs des champs donnés en empêchant l'injection de js, html, (sql)
        $emailu = addslashes($_POST["emailu"]);
        $mdpu = $_POST["mdpu"];

        $unUtilisateur = new Utilisateur();

        // On recherche dans la BDD un enregistrement avec un nom d'utilisateur donné
        $unUtilisateur->retrieve("MAILU='".$emailu."'");
    
        // Si l'attribut "id" de notre objet est définie, alors
        if ($unUtilisateur->getidu() > 0) 
        {
            // On vérifie que le mot de passe du form et de la BDD correspondent
            if (password_verify($mdpu, $unUtilisateur->getmdpu()))
            {
                require_once 'Modele/etablissement.php';
                require_once 'Modele/associe.php';

                // On stock dans la variable de session le nom d'utilisateur et son statut
                $_SESSION['emailu'] = $emailu;

                $unEtablissement = new Etablissement();
                $lesEtablissements = new Etablissement();
                $lesEtablissements = $lesAssocies->findAllBy("IDE ='".$lesEtablissements->getIDE()."'");

                $associe = new Associe();
                // On appelle la méthode "findAllBy($condition) de la classe associe"
                $lesAssocies = $associe->findAllBy("IDU ='".$unUtilisateur->getidu()."'");

                switch ($_SESSION['emailu']) 
                {
                    // En fonction du nom, on récupères les établissements associés
                    case 'administrateur@citeScolaire.fr':
                        $etat = 'choixEtablissement';
                        break;
                    case 'college.ej@citescolaire.com':
                        $etat = 'choixEtablissement2';
                        break;
                    case 'lycee.ej@citescolaire.com':
                        $etat = 'choixEtablissement3';
                        break;
                    case 'lycee.jj@citescolaire.com':
                        $etat = 'lyceeJJ';
                        break;
                    case 'cite.scolaire@citescolaire.com':
                        $etat = 'citeScolaire';
                        break;
                }
            }
            else 
            {
                //$error = 'Utilisateur ou mot de passe incorrect.';
                //header('location: index.php?action=connexion');
                $etat = 'connexionImpossible';
                
            }
        }
        else 
        {
            //$error = 'Utilisateur ou mot de passe incorrect.';
            //header('location: index.php?action=connexion');
            $etat = 'connexionImpossible';

            
        }
    }
    else 
    {
        //$error = 'Il semble que la saisie des champs est incorrecte.';
        //header('location: index.php?action=connexion');
        $etat = 'connexionImpossible';
    }
}
?>