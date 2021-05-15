<?php 
if (isset($_SESSION['emailu']) && !empty($_SESSION['emailu']))
{
    
    require_once 'Modele/utilisateur.php';
    require_once 'Modele/associe.php';
    
    //Récupère utilisateur courant de la session
    $unUtilisateur = new Utilisateur();
    $unUtilisateur->retrieve("MAILU='".$_SESSION['emailu']."'");

    //Mets dans collection lesAssocies tout associe qui sont liées à l'id de l'user
    $associe = new Associe();
    $lesAssocies = array();
    // On appelle la méthode "findAllBy($condition) de la classe associe"
    $lesAssocies = $associe->findAllBy("IDU ='".$unUtilisateur->getidu()."'");

    //Boucle qui parcourt lesAssocies et rentre dans lesEtablissements l'id de l'étblissement
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
else
{
    $etat = "connexion";
}

?>