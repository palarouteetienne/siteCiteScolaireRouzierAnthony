<?php
	
	$laRessource = new Ressource;
	unlink($_POST["Chemin"]);
	$laRessource->delete($_POST["Num"]);


	$uneRessource = new Ressource();
	$lesRessources = array();

	$lesRessources = $uneRessource->findAll();

	$uneFormation = new Article();
	$lesFormations = array();

	$lesFormations = $uneFormation->findAll();

	$etat = "ressourceSupprimer";
?>