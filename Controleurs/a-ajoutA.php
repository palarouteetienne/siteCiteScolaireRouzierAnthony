<?php
	include_once "Modele/utilisateur.php";
	
	//$unEtablissement = new Etablissement();
	//$unEtablissement->retrieve("NOME='".$_POST['NomE']."'");
	//$nume = $unEtablissement->getNumeroE();

	$numEtablissement = $_SESSION["numeroEtab"];
	
	$unUtilisateur = new Utilisateur();
	$unUtilisateur->retrieve("MAILU='".$_SESSION['email']."'");
	$numUtilisateur = $unUtilisateur->getidu();

	$unArticle = new Article("", $numEtablissement, $numUtilisateur, $_POST['titre'], $_POST['voie'], $_POST['typeArticle'], $_POST['contenuArticle'], $_POST['dateDebutParution'], $_POST['dateFinParution']);
	$unArticle->create();
	
	$numArticleCree=$unArticle->numero();

	$nomsFichiers=$_FILES['pieceJointe']['name'];
	$taillesFichiers=$_FILES['pieceJointe']['size'];
	$nomsTemps=$_FILES['pieceJointe']['tmp_name'];
	$i=0;
	while ($i<count($nomsFichiers)) {
		$nomFichier=$nomsFichiers[$i];
		
		if (strlen($nomFichier) > 0) {
			// On préfixe le nom des fichiers envoyés par la date et l'heure
			$nomFichier=date("Y") . date("m") . date("j") . "-" . date("G") . date("i") . date("s") . "-" . $nomFichier;
		
			$cheminDestination = "fichier/".$nomFichier;
			$ext = strtolower(strrchr($nomFichier, "."));
			$tailleFichier=$taillesFichiers[$i];
			$tmpName=$nomsTemps[$i];

			move_uploaded_file($tmpName, $cheminDestination);
		
			$laRessource = new Ressource("", $numArticleCree, $nomFichier, $ext, $cheminDestination, $tailleFichier);
			$laRessource->create();
		}
		$i++;
		
	}

	
	include "Controleurs/alert.php";
	alert("alert-success", "L'article a été ajouté");

	// Comme on va se rendre sur la vue "Choix Etablissement",
	// on recharge les données pour cette dernière
	$unEtablissement = new Etablissement();
	$lesEtablissements = array();
	$lesEtablissements = $unEtablissement->findAll();
	$etat="choixEtablissement";


?>