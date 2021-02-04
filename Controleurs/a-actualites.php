<?php
	//A priori, pas de création d'établissement en vue, ni de cité scolaire.
	//Donc je crée un objet pour ceux en place, en dur ...
	include_once "Modele/etablissement.php";
	$citeScolaire = new Etablissement();
	
	$citeScolaire->retrieve("IDE=4");

	//Récup des actus de tous les étab avec "true"
	$lesActusCiteScolaire = $citeScolaire->getLesArticlesACTU(true); 

	$diriger1="1";

	$etat = "actualites";
?>