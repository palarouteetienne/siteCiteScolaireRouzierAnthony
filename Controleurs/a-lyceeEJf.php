<?php 

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='lycée Eugène Jamot'");

	$laFormation = new Article();
	$lesFormations = array();

	$lesFormations = $laFormation->findAllLyceeEJ();

	$laRessource = new Ressource();
	$lesRessources = array();

	$lesRessources = $laRessource->findAll();

	$uneRessourcePDF = new Ressource();
	$uneRessourcePDF->retrieve("FORMATION='36' AND FORMATRESSOURCE='pdf'");

	$uneRessourceIMG = new Ressource();
	$uneRessourceIMG->retrieve("FORMATION='36' AND FORMATRESSOURCE='jpg'");

	$diriger = "1";

	$etat = "lyceeEJ";

?>