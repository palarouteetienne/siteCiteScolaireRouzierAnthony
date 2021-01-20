<?php 

	$unEtablissement = new Etablissement();
	$unEtablissement->retrieve("NOME='cité Scolaire'");

	$lArticle = new Article();
	$lesFormations = array();

	//$lesFormations = $lArticle->findByEtab($unEtablissement->getnumeroE());

	//$laFormationIns = new Article();
	//$lesFormationsIns = array();

	//$lesFormationsIns = $laFormationIns->findIns();

	//$laRessourcePdfInternat = new Ressource();
	//$laRessourcePdfInternat->retrieve("FORMATION='32' AND FORMATRESSOURCE='pdf'");

	//$laRessourceImgInternat = new Ressource();
	//$laRessourceImgInternat->retrieve("FORMATION='32' AND FORMATRESSOURCE='jpg'");

	//$laRessourcePdfSelf = new Ressource();
	//$laRessourcePdfSelf->retrieve("FORMATION='33' AND FORMATRESSOURCE='pdf'");

	//$laRessourceImgSelf = new Ressource();
	//$laRessourceImgSelf->retrieve("FORMATION='33' AND FORMATRESSOURCE='jpg'");

	//$laRessourcePdfBA = new Ressource();
	//$laRessourcePdfBA->retrieve("FORMATION='34' AND FORMATRESSOURCE='pdf'");

	//$laRessourceImgBA = new Ressource();
	//$laRessourceImgBA->retrieve("FORMATION='34' AND FORMATRESSOURCE='jpg'");

	$diriger1 = "3";

	$etat = "self";

?>