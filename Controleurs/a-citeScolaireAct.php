<?php
	//A priori, pas de création d'établissement en vue, ni de cité scolaire.
	//Donc je crée un objet pour ceux en place, en dur ...

	$citeScolaire = new Etablissement();
	
	$citeScolaire->retrieve("IDE=4");

	$lesActusCiteScolaire = $citeScolaire->getLesArticlesACTU();

	$diriger1="1";

	$etat = "citeScolaire";
?>