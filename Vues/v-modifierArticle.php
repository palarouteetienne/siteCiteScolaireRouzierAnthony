<!DOCTYPE html>
<html>
	<head>
		<title>Saisie modifications article</title>

		<meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

		<link href="css/modifArt.css" rel="stylesheet">
        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>

        <script src="lib/tinymce/js/tinymce/tinymce.min.js"></script>
		<script>
			tinyMCE.init({
				selector:"textarea#commentaire",
				plugins: 'link,lists,paste',
				menubar: 'insert,edit',
				toolbar: 'paste,undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link',
				menubar: 'edit view'
			});
		</script>	

        <link href="../css/styleFormulaire.css" rel="sylesheet">

    </head>
    <body>
		<script type="text/javascript">


                // Supprimer une ligne sur clic bouton Suppr
			$(document).on("click", ".supprimer", function(){
				
				var $parent = $(this).closest('.row');
        		var numRessASuppr = $parent.find('.idr').text();
				$(this).parents(".ressource").remove();

				let listASuppr = document.getElementById('listASuppr');
				let monNoeud = document.createElement('input');
				monNoeud.type="hidden";
				monNoeud.name="listASuppr[]";
				monNoeud.value=numRessASuppr;
				listASuppr.appendChild(monNoeud);
			});
			function addChoiceFile()
			{
				let listChoiceFile = document.getElementById('listChoiceFile');
				let monNoeud = document.createElement('input');
				monNoeud.type="file";
				monNoeud.name="tabRessources[]";
				listChoiceFile.appendChild(monNoeud);
			}	
		</script>

 		<div class="container-fluid">

			<form action="index.php?action=modifArt" method="POST" class="form" ENCTYPE="multipart/form-data">

			<div class="row">
				<div class="col-md-12">
					<h3>Modification de l'article <?php echo $lArticle->getida(); ?></h3>
					<input type="hidden" name="IDA" value="<?php echo $lArticle->getida(); ?>"/>
					<input type="hidden" name="ETABA" value="<?php echo $lArticle->getetaba(); ?>"/>
					<input type="hidden" name="UTILA" value="<?php echo $lArticle->getutila(); ?>"/>
				</div>
			</div>
			<?php 
			$leType->retrieveById($lArticle->gettypea()); 
			$laVoie->retrieveById($lArticle->getvoiea()); 
			?>
			<div class="row">
				<div class="col-md-4">
					Type d'article
					<select name="TYPEA" required>
						<option checked="checked" value="<?php echo $leType->getidt(); ?>"><?php echo $leType->gettype(); ?></option>
						<?php
							for ($i=0; $i<count($lesTypes); $i++) 
							{
								if($lesTypes[$i]->getidt() != $leType->getidt())
								{
									echo "<option value='".$lesTypes[$i]->getidt()."'>".$lesTypes[$i]->gettype()."</option>";
								}	
							}
						?>
					</select>
				</div>

				<div class="col-md-8">
					Voie
					<select name="VOIEA" required>
						<option checked="checked" value="<?php echo $laVoie->getidv(); ?>"><?php echo $laVoie->getvoie(); ?></option>
						<?php
							for ($i=0; $i<count($lesVoies); $i++) 
							{
								if($lesVoies[$i]->getidv() != $laVoie->getidv())
								{
									echo "<option value='".$lesVoies[$i]->getidv()."'>".$lesVoies[$i]->getvoie()."</option>";
								}
							}	
						?>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					Titre &nbsp <input type="text" id = "titre" name="TITREA" size="100" value="<?php echo $lArticle->gettitrea(); ?>"></input>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					Date début parution
					<input type="date" name="DATEDEBR" value="<?php echo $lArticle->getdatedebr(); ?>"/>
				</div>

				<div class="col-md-6">
					Date fin parution<?php echo $lArticle->getdatefinr(); ?>
					<input type="date" name="DATEFINR" value="<?php echo $lArticle->getdatefinr(); ?>"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<center><textarea id="commentaire" name="COMMENTAIREA" cols="100" rows="10"><?php echo $lArticle->getcommentairea(); ?></textarea></center>
				</div>
				<div class="col-md-4">
					<center><span class="btn btn-info">Ressources de l'article :</span></center>
					
					<div id="listChoiceFile">

					<?php
				  		$nb = count($lesRessources);
				  		for($i=0; $i<$nb; $i++)
						{
				      		echo "
							<div class='ressource row'>
							  	<div class='idr col-sm-1'>"
							  		.$lesRessources[$i]->getIDR().
								"</div>
								<div class='col-sm-10'>";
							if($lesRessources[$i]->getformatr() != "pdf")
							{
								echo "<img class='ressource' src='".$lesRessources[$i]->getcheminr()."' width='30px' height='30px'/>";
							}
							else
							{
								echo $lesRessources[$i]->getnomr()." <i class='fa fa-file-pdf-o'></i>";
							}
							echo "
								</div>
								<div class='col-sm-1'>
									<a class='supprimer' title='Supprimer' data-toggle='modal' data-target='#confirm-delete'>
										<i class='fa fa-trash fa-2x' aria-hidden='true'></i>
									</a>
						  		</div>
							</div>
							";
				    	}
				    ?>
					</div>
						<div class='col-sm-2'>
							<!-- Ajout fichiers ressources -->
							<i id="ajouter" class="fa fa-plus fa-5x" onclick="addChoiceFile()"></i>
						</div>
					</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<center><input type="submit" class="btn btn-info" value="Valider"></input></center>
				</div>
			</div>

			<div id="listASuppr">
				<!-- Pour placer la liste des ressources à supprimer à la validation -->
			</div>
			</form>
		</div>

    </body>
</html>