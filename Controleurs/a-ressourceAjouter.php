<?php

	$uneRessource = new Ressource();
	$lesRessources = array();

	//$lesRessources = $uneRessource->findAll();

	//$uneFormation = new Article();
	//$lesFormations = array();

	//$lesFormations = $uneFormation->findAll();

	$unUtilisateur = new Utilisateur();
	$lesUtilisateurs = array();

	$lesUtilisateurs = $unUtilisateur->findAll();

	$codeErreur = "0";

	$etat = "ressourceAjouter";
?>