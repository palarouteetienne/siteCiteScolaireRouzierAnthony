<?php
	include "Modele/utilisateur.php";
	include "Modele/etablissement.php";
	include "Modele/associe.php";
	
	$ide = $_POST["etabu"];
	$nomu = $_POST["nomu"];
	$prenomu = $_POST["prenomu"];
	$emailu = $_POST["emailu"];
	$mdpu = password_hash($_POST["mdpu"], PASSWORD_DEFAULT);
	$adminu = $_POST["adminu"];
	
	$unUtilisateur = new Utilisateur("null", $ide, $nomu, $prenomu, $emailu, $mdpu, $adminu);
	
	$reussi = $unUtilisateur->create();
	
	if($reussi == true)
	{
		$unUtilisateur->createAsso();
		$etat = "inserUtil";
	}
	else
	{
		$etat = "creautilimposs";
	}
	

?>