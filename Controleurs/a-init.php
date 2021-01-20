<?php

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='cité scolaire'");

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='collège Eugène Jamot'");

	$deuxEtablissement = new Etablissement();
	$deuxEtablissement->retrieve("NOME='lycée Eugène Jamot'");

	$troisEtablissement = new Etablissement();
	$troisEtablissement->retrieve("NOME='lycée Jean Jaurès'");

	$etat = "accueil";

?>