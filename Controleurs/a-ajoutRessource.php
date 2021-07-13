<?php

	$ressource = new Ressource();

	if (!empty($_POST['submit']))
	{


		if ($_SESSION["codeErreur"] == 2)
		{
			$codeErreur = "2";

			if ($_SESSION["codeErreur2"] == 2)
			{
				$codeErreur2 = "2";
			}

			elseif ($_SESSION["codeErreur2"] == 3)
			{
				$codeErreur2 = "3";
			}

			elseif ($_SESSION["codeErreur2"] == 4)
			{
				$codeErreur2 = "4";
			}

			elseif ($_SESSION["codeErreur2"] == 5)
			{
				$codeErreur2 = "5";
			}
		}
		
	}
	
	$lesRessources = array();

	$lesRessources = $ressource->findAll();

	$article = new Article();
	$lesarticles = array();

	$lesarticles = $article->findAll();

	$etat = "ressourceAjouter";

?>