<?php

// On teste le cas où l'utilisateur est déjà connecté
if (isset($_SESSION['emailu']) && !empty($_SESSION['emailu']))
    {

        require_once 'Modele/etablissement.php';
        require_once 'Modele/utilisateur.php';
        require_once 'Modele/associe.php';
        
        $unUtilisateur = new Utilisateur();
        $unUtilisateur->retrieve("MAILU='".$_SESSION['emailu']."'");
        $associe = new Associe();
        $lesAssocies = array();

        // On appelle la méthode "findAllBy($condition) de la classe associe"
        $lesAssocies = $associe->findAllBy("IDU =".$unUtilisateur->getidu());
        $lesAssocies = $associe->findAllBy("IDU ='".$unUtilisateur->getidu()."'");

        //Faire une boucle qui parcourt lesAssocies avec un indice et qui fait un findallby sur lesAssocies avec indices []
        $lesEtablissements = array();
        $unAssocies = new Associe();
        foreach ($lesAssocies as $unAssocies)
        {
            $unEtablissement = new Etablissement();
            $unEtablissement = $unAssocies->getIDE();
            array_push($lesEtablissements, $unEtablissement);
        }

        $etat="choixEtablissement";

    }
// si pas connecté
else {

    // je verifie si le formulaire de connexion à bien été envoyé avec des valeurs
    if (isset($_POST['submit']) && !empty($_POST['emailu']) && !empty($_POST['mdpu']))
    {
        require 'Modele/utilisateur.php';
        $unUtilisateur = new Utilisateur();

        // On récup les valeurs du formulaire en empêchant l'injection de js, html, (sql)
        $emailu = addslashes($_POST["emailu"]);
        $mdpu = $_POST["mdpu"];

        // Je récupère l'utilisateur si
        $unUtilisateur = $unUtilisateur->exist("MAILU='".$emailu."'");
        // Si l'email de l'user exist alors on rentre
        if ($unUtilisateur)
        {
            // On vérifie que le mot de passe du form et de la BDD correspondent
            if (password_verify($mdpu, $unUtilisateur->getmdpu()))
            {
                // ajout d'un objet
                require_once 'Modele/associe.php';
                $associe = new Associe();

                // On stock dans la variable de session le nom d'utilisateur et son statut
                $_SESSION['emailu'] = $emailu;


                // On appelle la méthode "findAllBy($condition) de la classe associe"
                $lesAssocies = array();
                $lesAssocies = $associe->findAllBy("IDU ='".$unUtilisateur->getidu()."'");


            //Faire une boucle qui parcourt lesAssocies avec un indice et qui fait un findallby sur lesAssocies avec indices []
                $lesEtablissements = array();
                $unAssocies = new Associe();
                foreach ($lesAssocies as $unAssocies)
                {
                    $unEtablissement = new Etablissement();
                    $unEtablissement = $unAssocies->getIDE();
                    array_push($lesEtablissements, $unEtablissement);
                }
                $etat="choixEtablissement";
            }
            
        }
        
    }
    else {
                //$error = 'Utilisateur ou mot de passe incorrect.';
               //header('location: index.php?action=connexionImpossible');
                $etat = 'connexionImpossible';

            }
            
}
