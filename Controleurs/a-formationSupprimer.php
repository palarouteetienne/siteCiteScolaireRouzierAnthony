<?php

	$uneFormation = new Article();
	$lesFormations = array();

	$lesFormations = $uneFormation->findAll();

	$unEtablissement = new Etablissement();
	$lesEtablissements = array();

	$lesEtablissements = $unEtablissement->findAll();

	$etat = "formationSupprimer";
?>