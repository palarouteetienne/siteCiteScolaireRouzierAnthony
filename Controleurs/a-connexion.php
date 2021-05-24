<?php 

if (isset($_SESSION['emailu']) && !empty($_SESSION['emailu']))
{
    require_once 'Modele/utilisateur.php';
    require_once 'Modele/associe.php';
    require_once 'Modele/etablissement.php';
    //Récupère utilisateur courant de la session
    $unUtilisateur = new Utilisateur();
    $unUtilisateur->retrieve("MAILU='".$_SESSION['emailu']."'");
    $unUtilisateur->setlesetab();

    //Boucle qui parcourt associe et crée un établissement 
    //à partir de l'id de l'établissement trouvé pour cet utilisateur
    
    $lesEtablissements = array();
    
    $lesEtablissements = $unUtilisateur->getlesetab();

    $etat="choixEtablissement";

}
else
{
    $etat = "connexion";
}

?>