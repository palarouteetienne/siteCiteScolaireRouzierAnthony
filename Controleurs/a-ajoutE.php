<?php
	
	$etablissement = new Etablissement();

	$unEtablissement = new Etablissement($nombre, $_POST['NomCS'], $_POST['Nom'], $_POST['Rue'], $_POST['CP'], $_POST['Ville'], $_POST['Pays'], $_POST['Tel'], $_POST['Mail'], $_POST['Mot']);

	$lesEtablissements = array();

	$lesEtablissements = $lEtablissement->findAll();
	
	$etat = "etablissementAjouter";


?>