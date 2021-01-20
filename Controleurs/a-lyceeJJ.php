<?php 

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='lycée Jean Jaurès'");

	$laFormation = new Article();
	$lesFormations = array();

	$lesFormations = $laFormation->findAllLyceeJJ();

	$laRessource = new Ressource();
	$lesRessources = array();

	$lesRessources = $laRessource->findAll();

	$uneRessourcePDF = new Ressource();
	$uneRessourcePDF->retrieve("FORMATION='38' AND FORMATRESSOURCE='pdf'");

	$uneRessourceIMG = new Ressource();
	$uneRessourceIMG->retrieve("FORMATION='38' AND FORMATRESSOURCE='jpg'");


	$etat = "lyceeJJ";

?>