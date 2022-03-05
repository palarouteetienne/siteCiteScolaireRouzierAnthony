<?php
	include "Modele/etablissement.php";
<<<<<<< HEAD
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
=======

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='cité scolaire'");

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='collège Eugène Jamot'");

	$deuxEtablissement = new Etablissement();
	$deuxEtablissement->retrieve("NOME='lycée Eugène Jamot'");

	$troisEtablissement = new Etablissement();
	$troisEtablissement->retrieve("NOME='lycée Jean Jaurès'");
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83

	$etat = "accueil";

?>