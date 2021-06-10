<?php
	//inclure les classes
	/*include "Modele/etablissement.php";
	include "Modele/article.php";
	include "Modele/ressource.php";
	include "Modele/utilisateur.php";*/

	session_start();

	// *** on récupère l'action à entreprendre ***
	if (isset($_GET['action']))
	{
		$action = $_GET['action'];
	}
	else
	{
		$action = 'init';
	}

	// *** traitement de l'action ***
	$scriptAction = 'Controleurs/a-'.$action.'.php';
	include_once $scriptAction;
	
	// *** génération de la vue ***
	$scriptVue = 'Vues/v-'.$etat.'.php';
	include_once $scriptVue;
?>