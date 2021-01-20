<?php 

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='collège Eugène Jamot'");

	$laFormation = new Article();
	$lesFormations = array();

	$lesFormations = $laFormation->findAllCollegeEJ();

	$laRessource = new Ressource();
	$lesRessources = array();

	$lesRessources = $laRessource->findAll();

	$uneRessourcePDF = new Ressource();
	$uneRessourcePDF->retrieve("FORMATION='37' AND FORMATRESSOURCE='pdf'");

	$uneRessourceIMG = new Ressource();
	$uneRessourceIMG->retrieve("FORMATION='37' AND FORMATRESSOURCE='jpg'");


	$diriger = "1";

	$etat = "collegeEJ";

?>