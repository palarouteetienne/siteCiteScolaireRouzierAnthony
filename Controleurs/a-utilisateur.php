<?php

	$_SESSION['email'] = addslashes($_POST["emailu"]);
	$_SESSION["mdp"] = addslashes($_POST["mdpu"]);

	$unUtilisateur = new Utilisateur();

	$unUtilisateur->retrieve("MAILU='".$_SESSION['email']."'");

	$mdp = $unUtilisateur->getmdpu();

	if (password_verify($_SESSION["mdp"], $mdp))
	{
		$etat = "utilisateur";
	}
	else
	{
		$etat = "connexionImpossible";
	}

?>