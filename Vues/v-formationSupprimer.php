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

	<title>Formation Suppression</title>

	<link href="./css/styleFormulaire.css" rel="stylesheet">

	<script>

		function myFunction(num, nomE, nom, voie, commentaire)
		{
			document.getElementById("Num").value = num;
			document.getElementById("NomE").value = nomE;
			document.getElementById("Nom").value = nom;
			document.getElementById("Voie").value = voie;
			document.getElementById("Commentaire").value = commentaire;
		}

	</script>

</head>

<body style="background:url(img/index/fond3.png) no-repeat center fixed;">

	<div id="form-main" style="padding-top: 25%; padding-bottom: 5%;">
		<div id="form-div">
	      		
	      	<center>
	      		<h2 style="color: white"> Formation Suppression </h2>
	      	</center>
	      	<br>

	      	<table rules=rows style="width: 100%; border: #0078ff solid 4px; cursor:pointer; background-color: white; color:#0078ff; font-size:18px;" cellpadding="10">
				<thead>
				    <tr align="center" valign="middle">
				    	<th>Numéro</th>
				    	<th>Nom de l'Etablissement</th>
				    	<th>Nom de la formation</th>
				    	<th>Voie de la Formation</th>
				    	<th>Commentaire</th>
				    	<th></th>
				    </tr>
				</thead>
				<tbody>

				  	<?php

				  		$nb = count($lesFormations);

				  		for($i=0; $i<$nb; $i++)
						{

	    			?>

				    <tr align="center" valign="middle">
				    	<td id="num">
				      	
				      		<?php
				      			echo $lesFormations[$i]->getIdFormation();
				      		?>

				      	</td>
				    	<td id="nomE">
				      	
				      		<?php
				      			echo $lesFormations[$i]->getUnEtablissement()->getNomE();
				      		?>

				      	</td>
				      	<td id="nom">
				      	
				      		<?php
				      			echo $lesFormations[$i]->getNomFormation();
				      		?>

				      	</td>
				      	<td id="voie">
				      	
				      		<?php
				      			echo $lesFormations[$i]->getVoieFormation();
				      		?>

				      	</td>
				      	<td id="commentaire">
				      	
				      		<?php
				      			echo $lesFormations[$i]->getCommentaire();
				      		?>

				      	</td>
				      	<td>

				      		<div class="submit-2">
				      			<input type="button" value="Supprimer" id="supprimer"

				      			<?php
				      				echo "onclick=".chr(34)."myFunction('".$lesFormations[$i]->getIdFormation()."','".addslashes($lesFormations[$i]->getUnEtablissement()->getNomE())."','".addslashes($lesFormations[$i]->getNomFormation())."','".addslashes($lesFormations[$i]->getVoieFormation())."','".addslashes($lesFormations[$i]->getCommentaire())."')".chr(34);
				      			?>

				      			data-toggle="modal" data-target="#exampleModal">
				      			<div class="ease-2"></div>
				      		</div>

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

  	<form action="index.php?action=suppF" method="post">
		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Supprimer la formation</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        
		      	Numero
		      	<br>

		      	<input readonly type="text" name="Num" id="Num"/>

		      	<br>
		      	<br>

		      	Nom établissement
		      	<br>

		      	<input readonly type="text" name="NomE" id="NomE"/>

		      	<br>
		      	<br>

		      	Nom Formation
		      	<br>

		      	<input type="text" name="Nom" id="Nom">

		      	<br>
		      	<br>

		      	Voie Formation
		      	<br>

		      	<input type="text" name="Voie" id="Voie"/>

		      	<br>
		      	<br>

		      	Commentaire
		      	<br>

		      	<textarea cols="60" rows="5" name="Commentaire" Id="Commentaire"></textarea>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
		        <button type="submit" class="btn btn-primary">Supprimer</button>
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