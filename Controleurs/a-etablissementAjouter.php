<?php

	$unEtablissement = new Etablissement();
	$lesEtablissements = array();

	$lesEtablissements = $unEtablissement->findAll();

	$laCiteScolaire = new CiteScolaire();
	$lesCiteScolaires = array();

	$lesCiteScolaires = $laCiteScolaire->findAll();

	$etat = "etablissementAjouter";
?>