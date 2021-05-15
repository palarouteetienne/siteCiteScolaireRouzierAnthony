<?php

	$nomu = $_POST["nomu"];
	$prenomu = $_POST["prenomu"];
	$emailu = $_POST["emailu"];
	$mdpu = $_POST["mdpu"];
	$ide = $_POST["etabu"];

	echo $ide." ".$nomu." ".$prenomu." ".$emailu." ".$mdpu;

	$unUtilisateur = new Utilisateur($nomu, $prenomu, $emailu, $mdpu);
	
	$unUtilisateur->create();
	
	$uneAsso = new Associe($unUtilisateur->getIdu(),$ide);

	$etat = "inserUtil";

?>