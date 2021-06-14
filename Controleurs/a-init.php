<?php
	include "Modele/etablissement.php";
	include "Modele/article.php";

	$cite = new Etablissement();
	$cite->retrieve("NOME='cité scolaire'");

	$college = new Etablissement();
	$college->retrieve("NOME='collège Eugène Jamot'");

	$jamot = new Etablissement();
	$jamot->retrieve("NOME='lycée Eugène Jamot'");

	$jaures = new Etablissement();
	$jaures->retrieve("NOME='lycée Jean Jaurès'");

	$actusrecentes = new article();
	$actus = $actusrecentes->findActu();

	$etat = "accueil";

?>