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

	<title>Ressource Supression</title>

	<link href="./css/styleFormulaire.css" rel="stylesheet">

	<script type="text/javascript">

		function myFunction(num, ida, nom, format, chemin, poids, dateD, dateF)
		{
			document.getElementById("Num").value = num;
			document.getElementById("ida").value = ida;
			document.getElementById("Nom").value = nom;
			document.getElementById("Format").value = format;
			document.getElementById("Chemin").value = chemin;
			document.getElementById("Poids").value = poids;
			document.getElementById("DateD").value = dateD;
			document.getElementById("DateF").value = dateF;
		}

	</script>

</head>

<body style="background:url(img/index/fond3.png) no-repeat center fixed;">

	<div id="form-main" style="padding-top: 25%; padding-bottom: 5%;">
		<div id="form-div">
	      		
	      	<div class="text-center">
	      		<h2 style="color: white"> Ressource Supression </h2>
	      	</div>
	      	<br>

	      	<table rules=rows style="width: 100%; border: #0078ff solid 4px; cursor:pointer; background-color: white; color:#0078ff; font-size:10px;" cellpadding="10">
				<thead>
				    <tr align="center" valign="middle">
				    	<th>Numéro</th>
				    	<th>Nom de la Formation</th>
				    	<th>Nom de la ressource</th>
				    	<th>Format</th>
				    	<th>Chemin</th>
				    	<th>Poids</th>
				    	<th>Date Debut</th>
				    	<th>Date Fin</th>
				    	<th></th>
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
				      			echo $lesRessources[$i]->getLaFormation()->getNomFormation();
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
				      	<td>

				      		<div class="submit-2">
				      			<input type="button" value="Supprimer" id="supprimer"

				      			<?php
				      				echo "onclick=".chr(34)."myFunction('".$lesRessources[$i]->getNumero()."','".addslashes($lesRessources[$i]->getLaFormation()->getNomFormation())."','".addslashes($lesRessources[$i]->getNomRessource())."','".addslashes($lesRessources[$i]->getFormatRessource())."','".addslashes($lesRessources[$i]->getCheminRessource())."','".$lesRessources[$i]->getPoidsRessources()."','".$lesRessources[$i]->getDateDebut()."','".$lesRessources[$i]->getDateFin()."')".chr(34);
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

  	<form action="index.php?action=suppR" method="post" enctype="multipart/form-data">
		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Supprimer une Ressource</h5>
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

		      	Nom Formation
		      	<br>

		      	<input readonly type="text" name="ida" id="ida"/>

		      	<br>
		      	<br>

		      	Nom Ressource
		      	<br>

		      	<input readonly type="text" name="Nom" id="Nom"/>

		      	<br>
		      	<br>

		      	Format
		      	<br>

		      	<input readonly type="text" name="Format" id="Format"/>

		      	<br>
		      	<br>

		      	Chemin
		      	<br>

		      	<input readonly type="text" name="Chemin" id="Chemin"/>

		      	<br>
		      	<br>

		      	Poids
		      	<br>

		      	<input readonly type="text" name="Poids" id="Poids"/>

		      	<br>
		      	<br>

		      	Date de publication
		      	<br>

		      	<input readonly type="text" name="DateD" id="DateD"/>

		      	<br>
		      	<br>

		      	Date d'expiration 
		      	<br>

		      	<input readonly type="text" name="DateF" id="DateF"/>
		      	
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

	<div class="text-center">
		<div style="color: white;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>

	    </div>
    </div>

</footer>

</html>