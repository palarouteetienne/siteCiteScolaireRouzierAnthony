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

	<title>Etablissement Modification</title>
	<link href="./css/styleFormulaire.css" rel="stylesheet">
</head>

<body style="background:url(img/index/fond3.png) no-repeat center fixed;">

	<div id="form-main" style="padding-top: 25%; padding-bottom: 5%;">
		<div id="form-div">
	      		
	      	<center>
	      		<h2 style="color: white"> Etablissement Modification </h2>
	      	</center>
	      	<br>

	      	<table rules=rows style="width: 100%; border: #0078ff solid 4px; cursor:pointer; background-color: white; color:#0078ff; font-size:18px;" cellpadding="10">
				<thead>
				    <tr align="center" valign="middle">
				    	<th>Numéro</th>
				    	<th>Nom de la Cité Scolaire</th>
				    	<th>Nom de l'Etablissement</th>
				    	<th>Rue</th>
				    	<th>Code Postal</th>
				    	<th>Ville</th>
				    	<th>Téléphone</th>
				    	<th>Mail</th>
				    	<th>Mot du Proviseur</th>
				    	<th></th>
				    </tr>
				</thead>
				<tbody>

				  	<?php

				  		$nb = count($lesEtablissements);

				  		for($i=0; $i<$nb; $i++)
						{

	    			?>

				    <tr align="center" valign="middle">
				    	<td id="num">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getNumeroE();
				      		?>

				      	</td>
				    	<td id="nomCS">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getLaCiteScolaire()->getNomCiteScolaire();
				      		?>

				      	</td>
				      	<td id="nom">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getNomE();
				      		?>

				      	</td>
				      	<td id="rue">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getRueE();
				      		?>

				      	</td>
				      	<td id="cp">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getCodePostalE();
				      		?>

				      	</td>
				      	<td id="ville">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getVilleE();
				      		?>

				      	</td>
				      	<td id="tel">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getTelephoneE();
				      		?>

				      	</td>
				      	<td id="mail">
				      	
				      		<?php
				      			echo $lesEtablissements[$i]->getMailE();
				      		?>

				      	</td>
				      	<td id="mot">

				      		<?php
				      			echo $lesEtablissements[$i]->getMotProviseur();
				      		?>

				      	</td>
				      	<td>

				      		<div class="submit-2">
				      			<input type="button" value="Modifier" id="modifier"

				      			<?php
				      				echo "onclick=".chr(34)."myFunction('".$lesEtablissements[$i]->getNumeroE()."','".addslashes($lesEtablissements[$i]->getLaCiteScolaire()->getNomCiteScolaire())."','".addslashes($lesEtablissements[$i]->getNomE())."','".addslashes($lesEtablissements[$i]->getRueE())."','".$lesEtablissements[$i]->getCodePostalE()."','".addslashes($lesEtablissements[$i]->getVilleE())."','".$lesEtablissements[$i]->getTelephoneE()."','".$lesEtablissements[$i]->getMailE()."','".addslashes($lesEtablissements[$i]->getMotProviseur())."')".chr(34);
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

  	<form action="index.php?action=modifE" method="post">
		<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modifier l'Etablissement</h5>
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

		      	Nom Cité Scolaire
		      	<br>

		      	<select name="NomCS" id="NomCS">

		      		<?php

				  		$nb = count($lesCiteScolaires);

				  		for($i=0; $i<$nb; $i++)
						{

	    			?>

	    			<option name"<?php echo $lesCiteScolaires[$i]->getNomCiteScolaire(); ?>" >

	    				<?php

	    					echo $lesCiteScolaires[$i]->getNomCiteScolaire();

	    				?>

	    			</option>

	    			<?php

	      				}

	      			?>
		      		
		      	</select>

		      	<br>
		      	<br>

		      	Nom Etablissement
		      	<br>

		      	<input type="text" name="Nom" id="Nom">

		      	<br>
		      	<br>

		      	Rue
		      	<br>

		      	<input type="text" name="Rue" id="Rue"/>

		      	<br>
		      	<br>

		      	Code Postal
		      	<br>

		      	<input type="text" name="CP" id="CP"/>

		      	<br>
		      	<br>

		      	Ville
		      	<br>

		      	<input type="text" name="Ville" id="Ville"/>

		      	<br>
		      	<br>

		      	<br>

		      	Téléphone
		      	<br>

		      	<input type="text" name="Tel" id="Tel"/>

		      	<br>
		      	<br>

		      	Mail
		      	<br>

		      	<input type="text" name="Mail" id="Mail"/>

		      	<br>
		      	<br>

		      	Mot du Proviseur
		      	<br>

		      	<textarea cols="60" rows="5" name="Mot" Id="Mot"></textarea>

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

	<center>
		<div style="color: white;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>
	    </div>
    </center>

</footer>

</html>