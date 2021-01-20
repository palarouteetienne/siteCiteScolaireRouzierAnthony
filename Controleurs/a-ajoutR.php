<?php

	$ressource = new Ressource();

	if (!empty($_POST['submit']))
	{

		if ($ressource->upload("fichier", "fichier/", array("jpg", "pdf"), 10000000)==true)
		{
			$codeErreur = "1";
		}

		elseif ($_SESSION["codeErreur"] == 2)
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
	$lesArticles = array();

	$lesArticles = $article->findAll();

	$etat = "ressourceAjouter";

?>