<?php

	$uneRessource = new Ressource();
	$lesRessources = array();

	$lesRessources = $uneRessource->findAll();

	$uneFormation = new Article();
	$lesFormations = array();

	$lesFormations = $uneFormation->findAll();

	$etat = "ressourceSupprimer";
?>