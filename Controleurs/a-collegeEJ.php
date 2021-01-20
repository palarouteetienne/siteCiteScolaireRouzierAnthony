<?php 

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='collège Eugène Jamot'");

	$unArticle = new Article();
	$lesFormations = array();

	$lesFormations = $unArticle->findByEtab($unEtablissement->getnumeroE());

	$laRessource = new Ressource();
	$lesRessources = array();

	$lesRessources = $laRessource->;

	$uneRessourcePDF = new Ressource();
	$uneRessourcePDF->retrieve("FORMATION='37' AND FORMATRESSOURCE='pdf'");

	$uneRessourceIMG = new Ressource();
	$uneRessourceIMG->retrieve("FORMATION='37' AND FORMATRESSOURCE='jpg'");

	$etat = "collegeEJ";

?>