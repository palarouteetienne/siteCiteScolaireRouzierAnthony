<?php
	include_once "Modele/utilisateur.php";
	include_once "Modele/ressource.php";
	include_once "Modele/article.php";
	include_once "Modele/etablissement.php";
	
	$numEtablissement = $_POST["IDEtab"];
	
	$unUtilisateur = new Utilisateur();
	$unUtilisateur->retrieve("MAILU='".$_SESSION['emailu']."'");

	$numUtilisateur = $unUtilisateur->getidu();
	$unArticle = new Article("", $numEtablissement, $numUtilisateur, $_POST['titre'], $_POST['voie'], $_POST['typeArticle'], $_POST['contenuArticle'], $_POST['dateDebutParution'], $_POST['dateFinParution']);
	
	$numArticleCree=$unArticle->numero();
	$unArticle->create();
	
	$nomsFichiers=$_FILES['tabRessources']['name'];
	$taillesFichiers=$_FILES['tabRessources']['size']; 
	$nomsTemps=$_FILES['tabRessources']['tmp_name'];
	
	$i=0;
	while ($i<count($nomsFichiers)) 
	{
		$nomFichier=$nomsFichiers[$i];
		
		if (strlen($nomFichier) > 0) 
		{
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
	
	// Comme on va se rendre sur la vue "Choix Etablissement",
	// on recharge les données pour cette dernière
	$lesEtablissements = array();
	$unEtablissement = new Etablissement();
	
	$unUtilisateur->setlesetab();
	
	echo "L'article a été ajouté";
	$lesEtablissements = $unUtilisateur->getlesetab();

	$etat="choixEtablissement";
	
	?>