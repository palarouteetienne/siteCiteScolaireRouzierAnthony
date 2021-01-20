<?php

	$uneCiteScolaire = new CiteScolaire;

	$uneCiteScolaire->delete($_POST["Nom"]);

	$laCiteScolaire = new CiteScolaire();
	$lesCiteScolaires = array();

	$lesCiteScolaires = $laCiteScolaire->findAll();
	
	$etat = "citeScolaireSupprimer";


?>