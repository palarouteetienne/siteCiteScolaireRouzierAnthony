<?php

	$unEtablissement = new Etablissement();
	$lesEtablissements = array();

	$lesEtablissements = $unEtablissement->findAll();

	$etat = "etablissementSupprimer";
?>