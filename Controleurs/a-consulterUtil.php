<?php

	$uneRessource = new Ressource();
	$lesRessources = array();

	$lesRessources = $uneRessource->findAll();

	$unUtilisateur = new Utilisateur();
	$lesUtilisateurs = array();

	$lesUtilisateurs = $unUtilisateur->findAll();

	$etat = "consulterUtil";
?>