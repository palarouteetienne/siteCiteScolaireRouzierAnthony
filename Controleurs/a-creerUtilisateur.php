<?php
	
		$AdminUtilisateur = new Utilisateur();

		$AdminUtilisateur->retrieve("ADRESSEMAIL='".$_POST['emailA']."'");

		$mdp = $AdminUtilisateur->getmdpu();


		if (password_verify(addslashes($_POST["mdpA"]), $mdp))
		{

			$unUtilisateur = new Utilisateur();

			$nombre = $unUtilisateur->numero();

			$pass = $_POST["mdp"];
			$mdp = password_hash($pass, PASSWORD_DEFAULT);

			$newUtilisateur = new Utilisateur($_POST["citeScolaire"], $_POST["nom"], $_POST["prenom"], $_POST["email"], $mdp);

			$etat = "utilisateurCree";

		}

		else
		{

			$etat = "creationImpossible";

		}

?>