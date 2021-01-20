<?php

	$unEtablissement = new Etablissement($_POST['Num'], $_POST['NomCS'], $_POST['Nom'], $_POST['Rue'], $_POST['CP'], $_POST['Ville'], $_POST['Pays'], $_POST['Tel'], $_POST['Mail'], $_POST['Mot']);

	$unEtablissement->update($_POST['Num']);

	$lEtablissement = new Etablissement();
	$lesEtablissements = array();

	$lesEtablissements = $lEtablissement->findAll();

	$laCiteScolaire = new CiteScolaire();
	$lesCiteScolaires = array();

	$lesCiteScolaires = $laCiteScolaire->findAll();
	
	$etat = "etablissementModifier";

?>