<?php
    // je verifie si le formulaire de connexion à bien été envoyé avec des valeurs
    if (isset($_POST['submit']) && !empty($_POST['emailu']) && !empty($_POST['mdpu']))
    {
        include_once 'Modele/utilisateur.php';
        $unUtilisateur = new Utilisateur();
        
        // On récup les valeurs du formulaire en empêchant l'injection de js, html, (sql)
        $emailu = addslashes($_POST["emailu"]);
        $mdpu = $_POST["mdpu"];
        // Je récupère l'utilisateur si existe
        $utilExist = $unUtilisateur->exist("MAILU='".$emailu."'");
        
        // Si l'email de l'user existe
        if ($utilExist != false)
        {
            // On vérifie que le mot de passe du form et de la BDD correspondent
            if(password_verify($mdpu, $utilExist->getmdpu()))
            {
                require_once 'Modele/associe.php';
                
                //Récupère utilisateur saisi
                
                $_SESSION['emailu'] = $emailu;
                
                
                //Mets dans collection lesAssocies tout associe qui sont liées à l'id de l'user
                $associe = new Associe();
                $lesAssocies = array();
                // On appelle la méthode "findAllBy($condition) de la classe associe"
                $lesAssocies = $associe->findAllBy("IDU ='".$utilExist->getidu()."'");
                //Boucle qui parcourt lesAssocies et rentre dans lesEtablissements l'id de l'établissement
                $lesEtablissements = array();
                $unAssocie = new Associe();
                
                foreach ($lesAssocies as $unAssocie)
                {
                    $unEtablissement = new Etablissement();
                    $unEtablissement->retrieveById($unAssocie->getide());
                    array_push($lesEtablissements, $unEtablissement);
                }

                $etat="choixEtablissement";
            }
            else 
            {
                $error = 'Utilisateur ou mot de passe incorrect.';
                $etat = 'connexionImpossible';
                //Ou création utilisateur ...
            }
            
        }
        else 
        {
            $error = 'Utilisateur ou mot de passe incorrect.';
            $etat = 'connexionImpossible';
            //Ou création utilisateur ...
        }
        
    }


?>
