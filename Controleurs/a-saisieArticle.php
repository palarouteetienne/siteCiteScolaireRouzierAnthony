<?php
	//session_start();
	include_once "Modele/etablissement.php";
	include_once "Modele/type.php";
	include_once "Modele/voie.php";
	include_once "Modele/article.php";
	include_once "Modele/ressource.php";

	$IDEtab=$_REQUEST["IDEtab"];
	$_SESSION["IDEtab"] = $IDEtab;
	$monEtablissement = new Etablissement();
	$condition="IDE=".$IDEtab;
	$monEtablissement->retrieve($condition);

	$leType = new Type();
	$lesTypes=$leType->findAll();

	$laVoie = new Voie();
	$lesVoies=$laVoie->findAll();

$lesRessources = array();

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
	
	

	//$lesRessources = $ressource->findAll();
	
	$etat = "saisieArticle";

?>