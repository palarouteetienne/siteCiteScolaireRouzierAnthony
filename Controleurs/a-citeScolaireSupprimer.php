<?php

	$laCiteScolaire = new CiteScolaire();
	$lesCiteScolaires = array();

	$lesCiteScolaires = $laCiteScolaire->findAll();

	$etat = "citeScolaireSupprimer";
?>