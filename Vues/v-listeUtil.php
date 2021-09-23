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

	<title>Utilisateurs</title>

	<link href="./css/styleFormulaire.css" rel="stylesheet">
</head>

<body style="background:url(img/index/fond3.png) no-repeat center fixed;">

	<div id="form-main" style="padding-top: 25%; padding-bottom: 5%;">
		<div id="form-div">
	      		
	      	<div class="text-center">
	      		<h2 style="color: white"> Utilisateurs </h2>
	      	</div>

	      	<br>
	      	<br>

	      	<table rules=rows style="width: 100%; border: #0078ff solid 4px; cursor:pointer; background-color: white; color:#0078ff; font-size:18px;" cellpadding="10">
				<thead>
				    <tr align="center" valign="middle">
				    	<th>Nom Utilisateur</th>
				    	<th>Nombre de Fichiers upload</th>
				    	<th>Taille total de fichiers upload</th>
				    </tr>
				</thead>
				<tbody>

				  	<?php

				  		$nb = count($lesUtilisateurs);

				  		for($i=0; $i<$nb; $i++)
						{

	    			?>

				    <tr align="center" valign="middle">
				    	<td id="nom">
				      	
				      		<?php
				      			echo $lesUtilisateurs[$i]->getNom();
				      		?>

				      	</td>
				    	<td id="nbF">
				      	
				      		<?php
				      			echo $lesUtilisateurs[$i]->nbFichier($lesUtilisateurs[$i]->getIdUtil());
				      		?>

				      	</td>
				      	<td id="tailleF">
				      	
				      		<?php
				      			echo $lesUtilisateurs[$i]->tailleTotalFichier($lesUtilisateurs[$i]->getIdUtil());
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

			<input type="text" value="<?php echo $taille = $uneRessource->tailleTotale(); ?>"/> <p style="color:white;"> Mo </p>

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

  	<form action="index.php?action=ajoutA" method="post">
		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Ajouter une formation</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        
		      	Nom établissement
		      	<br>

		      	<select name="NomE" id="NomE">

		      		<?php

				  		$nb = count($lesEtablissements);

				  		for($i=0; $i<$nb; $i++)
						{

	    			?>

	    			<option>

	    				<?php

	    					echo $lesEtablissements[$i]->getNomE();

	    				?>

	    			</option>

	    			<?php

	      				}

	      			?>
		      		
		      	</select>

		      	<br>
		      	<br>

		      	Nom Formation
		      	<br>

		      	<input type="text" name="Nom" id="Nom">

		      	<br>
		      	<br>

		      	Voie Formation
		      	<br>

		      	<select name="Voie" id="Voie">

		      		<option>formation_collegeEJ</option>
		      		<option>option_collegeEJ</option>
		      		<option>option_seconde_lyceeEJ</option>
		      		<option>formation_seconde_lyceeEJ</option>
		      		<option>specialite_general_lyceeEJ</option>
		      		<option>option_general_lyceeEJ</option>
		      		<option>technologique_lyceeEJ</option>
		      		<option>superieur_lyceeEJ</option>
		      		<option>cap_lyceeJJ</option>
		      		<option>bacPro_lyceeJJ</option>
		      		<option>option_lyceeJJ</option>
		      		<option>portes_ouvertes_BTS</option>
		      		<option>portes_ouvertes_lyceeEJ</option>
		      		<option>portes_ouvertes_collegeEJ</option>
		      		<option>portes_ouvertes_lyceeJJ</option>
		      		<option>autres_actualités</option>
		      		<option>internat</option>
		      		<option>self</option>
		      		<option>inscription_BTS</option>
		      		<option>inscription_lyceeEJ</option>
		      		<option>inscription_collegeEJ</option>
		      		<option>inscription_lyceeJJ</option>
		      		<option>bourses_aides</option>
		      		<option>college_EJ</option>
		      		<option>lycee_EJ</option>
		      		<option>lycee_JJ</option>

		      	</select>

		      	<br>
		      	<br>

		      	Commentaire
		      	<br>

		      	<textarea cols="60" rows="5" name="Commentaire" Id="Commentaire"></textarea>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
		        <button type="submit" class="btn btn-primary">Sauvegarder</button>
		      </div>
		    </div>
		  </div>
		</div>
	</form>

</body>

<footer>

	<div class="text-center">
		<div style="color: white;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>
	    </div>
    </div>

</footer>

</html>