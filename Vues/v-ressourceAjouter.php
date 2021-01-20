<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Vues/Habillage/style.css" />

	<title>Ressource Ajout</title>
	<link href="./css/styleFormulaire.css" rel="stylesheet">	<script type="text/javascript"> 

		function codeErreur()
		{
			var codeErreur = <?php echo json_encode($codeErreur); ?>;
			var codeErreur2 = <?php echo json_encode($codeErreur2); ?>;

			if(codeErreur == 1){

				alert ("La ressource à bien été upload");

			}

			else if(codeErreur == 2){

				if(codeErreur2 == 2){

					alert ("Une erreur est survenue durant l'upload");

				}

				else if(codeErreur2 == 3){

					alert ("Une erreur est survenue durant l'upload, l'extension ne correspond pas au type souhaité (format 'jpg' ou 'pdf')");

				}

				else if(codeErreur2 == 4){

					alert ("Une erreur est survenue durant l'upload, le poids du fichier est trop élevé");

				}

				else if(codeErreur2 == 5){

					alert ("Une erreur est survenue durant l'upload, la ressource à ajouter existe déjà");

				}

			}
			
		}

	</script>

</head>

<body onload="codeErreur()" style="background:url(img/index/fond3.png) no-repeat center fixed;">

	<div id="form-main" style="padding-top: 25%; padding-bottom: 5%;">
		<div id="form-div">
	      		
	      	<center>
	      		<h2 style="color: white"> Ressource Ajout </h2>
	      	</center>
	      	<br>

	      	<div class="submit-2">
	      		<input type="button" data-toggle="modal" data-target="#exampleModal" value="Ajouter" id="ajouter">
	      		<div class="ease-2"></div>
	      	</div>

	      	<br>
	      	<br>

	      	<table rules=rows style="width: 100%; border: #0078ff solid 4px; cursor:pointer; background-color: white; color:#0078ff; font-size:10px;" cellpadding="10">
				<thead>
				    <tr align="center" valign="middle">
				    	<th>Numéro</th>
				    	<th>Nom de la Formation</th>
				    	<th>Utilisateur</th>
				    	<th>Nom de la ressource</th>
				    	<th>Format</th>
				    	<th>Chemin</th>
				    	<th>Poids</th>
				    	<th>Date Debut</th>
				    	<th>Date Fin</th>
				    </tr>
				</thead>
				<tbody>

				  	<?php

				  		$nb = count($lesRessources);

				  		for($i=0; $i<$nb; $i++)
						{

	    			?>

				    <tr align="center" valign="middle">
				    	<td id="num">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getNumero();
				      		?>

				      	</td>
				    	<td id="ida">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getLaFormation()->getarticler();
				      		?>

				      	</td>
				      	<td id="nomU">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getunUtilisateur()->getNom();
				      		?>

				      	</td>
				      	<td id="nom">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getNomRessource();
				      		?>

				      	</td>
				      	<td id="format">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getFormatRessource();
				      		?>

				      	</td>
				      	<td id="chemin">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getCheminRessource();
				      		?>

				      	</td>
				      	<td id="poids">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getPoidsRessources();
				      		?>

				      	</td>
				      	<td id="dateD">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getDateDebut();
				      		?>

				      	</td>
				      	<td id="dateF">
				      	
				      		<?php
				      			echo $lesRessources[$i]->getDateFin();
				      		?>

				      	</td>
				    </tr>

				    <?php
				    	}
				    ?>
				    
				</tbody>
			</table>
			<br>
		  	<br>
		  	<form action="index.php?action=util" method ="post" class="form" id="form1">
			    <div class="submit">
			        <input type="submit" value="Retour" id="button-blue"/>
			        <div class="ease"></div>
			    </div>
		    </form>
		    <br>
    		<br>

    		<a href="index.php?action=init" style="color: white;">Se déconnecter</a>

    	</div>
  	</div>

  	<form action="index.php?action=ajoutR" method="post" enctype="multipart/form-data">
		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ajouter une Ressource</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

		      	Nom de la Formation
		      	<br>

		      	<select name="ida" id="ida">

		      		<?php

				  		$nb = count($lesFormations);

				  		for($i=0; $i<$nb; $i++)
						{

	    			?>

	    			<option>

	    				<?php

	    					echo $lesFormations[$i]->getNomFormation();

	    				?>

	    			</option>

	    			<?php

	      				}

	      			?>
		      		
		      	</select>

		      	<br>
		      	<br>

		      	Date de publication * &nbsp

		      	<input type="date" name="DateD" id="DateD">

		      	<br>
		      	<br>

		      	Date d'expiration * &nbsp

		      	<input type="date" name="DateF" id="DateF">

		      	<br>
		      	<br>
		        
		      	<label for="fichier"> Votre Fichier </label>
		      	<br>

		      	<input type="file" name="fichier" id="fichier">
		      	<!--<input type="submit" value="Envoyer" name="submit">-->
		      	
		      	<br>
		      	<br>
		      	<br>
		      	<br>

		      	<p style="font-size: 12px;">* Seulement pour les actualités </p>

		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
		        <input value="Envoyer" type="submit" name="submit" class="btn btn-primary">
		      </div>
		    </div>
		  </div>
		</div>
	</form>

</body>

<footer>

	<center>
		<div style="color: white;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>

	    </div>
    </center>

</footer>

</html>