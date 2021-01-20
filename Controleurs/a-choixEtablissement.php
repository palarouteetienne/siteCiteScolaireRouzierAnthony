<?php
$connexionOk=0;

if (isset($_SESSION['email'])) {
	$connexionOk=1;
}
else {

	$email = addslashes($_POST["emailu"]);
	$mdpSaisi = addslashes($_POST["mdpu"]);

	$unUtilisateur = new Utilisateur();

	$unUtilisateur->retrieve("MAILU='".$email."'");

	$mdp = $unUtilisateur->getmdpu();

	if (password_verify($mdpSaisi, $mdp))
	{
		$_SESSION['email'] = $email;
		$_SESSION["mdp"] = $mdpSaisi;
		$connexionOk=1;
	}
}

if ($connexionOk==1) {
	$unEtablissement = new Etablissement();
	$lesEtablissements = array();
	$lesEtablissements = $unEtablissement->findAll();
	$etat="choixEtablissement";
}
else {
	$etat = "connexionImpossible";
}

?>