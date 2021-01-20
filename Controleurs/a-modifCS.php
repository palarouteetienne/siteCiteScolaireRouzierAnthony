<?php

	$uneCiteScolaire = new CiteScolaire($_POST['Nom'], $_POST['Mot']);

	$uneCiteScolaire->update($_POST['Nom']);

	$laCiteScolaire = new CiteScolaire();
	$lesCiteScolaires = array();

	$lesCiteScolaires = $laCiteScolaire->findAll();
	
	$etat = "citeScolaireModifier";


?>