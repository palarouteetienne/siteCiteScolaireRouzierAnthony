<?php
	//session_start();
	include_once "Modele/etablissement.php";
	include_once "Modele/type.php";
	include_once "Modele/voie.php";

	$numeroEtab=$_REQUEST["numeroEtab"];
	$_SESSION["numeroEtab"] = $numeroEtab;
	$monEtablissement = new Etablissement();
	$condition="NUMEROE=".$numeroEtab;
	$monEtablissement->retrieve($condition);

	$leType = new Type();
	$lesTypes=$leType->findAll();

	$laVoie = new Voie();
	$lesVoies=$laVoie->findAll();


	$etat = "saisieArticle";

?>