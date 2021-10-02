<?php
	include ('Modele/article.php');
	include ('Modele/ressource.php');
	include ('Controleurs/fonctionSupprFichiers.php');

	$etat = "modifArt";
	
	$lesRessources = array();
	
	//MAJ Article
	$artMAJ = new Article(	$_POST['IDA'],
							$_POST['ETABA'],
							$_POST["UTILA"], 
							$_POST["TITREA"], 
							$_POST["VOIEA"], 
							$_POST["TYPEA"], 
							$_POST["COMMENTAIREA"], 
							$_POST["DATEDEBR"], 
							$_POST["DATEFINR"]
						);

	$artMAJ->update();

	//MAJ Resources à ajouter
	$nomsFichiers=$_FILES['tabRessources']['name'];
	$nomsTemps=$_FILES['tabRessources']['tmp_name'];
	$format=$_FILES['tabRessources']['type'];
	$taille=$_FILES['tabRessources']['size'];

	$i=0;
	$erreur = "0";
	while ($i<count($nomsFichiers))
	{
		$IDR="";
		$articler=$_POST['IDA'];
		$nomFichier=$nomsFichiers[$i];

		//Extraction de l'extension (.pdf ou.jpg, etc.) du nom de fichier en cours de traitement
		$formatr=substr($nomFichier, strpos($nomFichier, ".", 0)+2-count($nomFichier));

		$cheminr="fichier/".$nomsFichiers[$i];
		$poidsr=$taille[$i];

		if (strlen($nomFichier) > 0) 
		{
			$positionPoint = strrchr($nomFichier, ".");
			$longueur = strlen($nomFichier);

			$Res = new Ressource($IDR, $articler, $nomFichier, $formatr, $cheminr, $poidsr);
			$Res->create();
			
			$cible = "fichier/".basename($nomFichier);
			$ext = strtolower(substr($nomFichier,$positionPoint,$longueur-$positionPoint));

			$tmpName=$nomsTemps[$i];

			if (move_uploaded_file($tmpName, $cible))
			{
				//Nouvelle image ajoutée
				$erreur += "/1";
			}
			else
			{
				//Upload raté
				$erreur += "/2";
			}
			
		}
		$i++;
	}

	//MAJ Resources à supprimer
	$ressASupp = $_POST["listASuppr"];
	
	for($i=0;$i<count($ressASupp);$i++)
	{
		$res = new Ressource();
		$res->retrieveById($ressASupp[$i]);
		$nomFichier = $res->getnomr();
		
		$res->delete($ressASupp[$i]);

		//Rq.: Supprimer aussi le fichier sur le disque.
		suppression("fichier",$nomFichier);
	}
?>