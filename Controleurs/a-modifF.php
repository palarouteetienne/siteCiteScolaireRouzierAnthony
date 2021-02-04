<?php

	$etablissement = new Etablissement();
	$etablissement->retrieve("NOME='".$_POST['NomE']."'");
	$num = $etablissement->getIDE();

	$laFormation = new Article($_POST['Num'], $num, $_POST['Nom'], $_POST['Voie'], $_POST['Commentaire']);

	$laFormation->update($_POST['Num']);

	$uneFormation = new Article();
	$lesFormations = array();

	$lesFormations = $uneFormation->findAll();

	$unEtablissement = new Etablissement();
	$lesEtablissements = array();

	$lesEtablissements = $unEtablissement->findAll();
	
	$etat = "formationModifier";

?>