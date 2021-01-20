<?php

	$unEtablissement = new Etablissement;

	$unEtablissement->delete($_POST["Num"]);

	$lEtablissement = new Etablissement();
	$lesEtablissements = array();

	$lesEtablissements = $lEtablissement->findAll();
	
	$etat = "etablissementSupprimer";


?>