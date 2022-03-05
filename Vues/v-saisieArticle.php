<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/croix.css">

        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>

		<script src="lib/tinymce/js/tinymce/tinymce.min.js"></script>
		
		<script>
			tinyMCE.init({
				selector:"textarea#contenuArticle",
				plugins: 'link,lists,paste',
				menubar: 'insert,edit',
				toolbar: 'paste,undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link',
				menubar: 'edit view'
			});
		</script>	

        <title>Saisie nouvel article</title>

        <link href="./css/styleFormulaire.css" rel="sylesheet">

    </head>

    <body>
 		<div class="container-fluid">

			<form action="index.php?action=ajoutArticle" method ="POST" class="form" ENCTYPE="multipart/form-data">

			<div class="row">
				<div class="col-md-3">
					<h3><?php echo $monEtablissement->getnomE(); ?></h3>
				</div>
				<div class="col-md-6">
					<center><span class=""><b>Saisie d'un nouvel article</b></span></center>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Type d'article
					<select name="typeArticle" required>
						<option value="">Choisir un type d'article</option>
						<?php
							for ($i=0; $i<count($lesTypes); $i++) { ?>
								<option value='<?php echo $lesTypes[$i]->getidt(); ?>'><?php echo $lesTypes[$i]->gettype(); 
						?>
						</option>
						<?php	
							}
						?>
					</select>
				</div>

				<div class="col-md-6">
					Voie
					<select name="voie" required>
						<option value="">Choisir une voie</option>
						<?php
							for ($i=0; $i<count($lesVoies); $i++) { ?>
								<option value='<?php echo $lesVoies[$i]->getidv(); ?>'><?php echo $lesVoies[$i]->getvoie(); 
						?>
						</option>
						<?php	
							}
						?>
					</select>
				</div>
				<div class="col-md-2">
					<center><input type="submit" class="btn btn-info" value="Valider"></input></center>
				</div>
			</div>

			<?php	
				echo "<input value='".$_GET["IDEtab"]."' type='hidden' name='IDEtab' id='IDEtab'></input>";
			?>

			<div class="row">
				<div class="col-md-12">
					Titre &nbsp <input type="text" id = "titre" name="titre" size="100"></input>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					Date début parution
					<input type="date" name="dateDebutParution"/>
				</div>

				<div class="col-md-6">
					Date fin parution
					<input type="date" name="dateFinParution"/>
				</div>

			</div>

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-8">
					<center><textarea id="contenuArticle" name="contenuArticle" cols="70" rows="25"></textarea></center>
				</div>
				<div class="col-md-3">
<<<<<<< HEAD
					<center><span class="">Ressources de l'articles :</span></center>
					
					<!-- AJOUT FICHIER -->
					
                 	<div class="btn btn-primary btn-sm float-left waves-effect waves-light" onclick="ajoutFichier()">
						Ajouter un fichier
					</div>
					<script>
						function ajoutFichier()
						{
							let choixFichier = document.getElementById('choixFichier');
							let monInput = document.createElement('input');
							monInput.type="file";
							monInput.name="tabRessources[]";
							choixFichier.appendChild(monInput);
						}
					</script>
					
					<div id="choixFichier"></div>
					
=======
					<center><span class="btn btn-info">Pièce(s) jointe(s) :</span></center>
					<br><br>
					<!-- ADD CHOICE FILE -->
					<button type="button" class="croix" onclick="addChoiceFile()" formnovalidate>
						<span id="l1"></span>	
						<span id="l2"></span>	
					</button>

					
					<!--<form action="index.php?action=ressourceAjouter" method ="post" class="form" id="form1">-->
					
					<script>
						function addChoiceFile()
						{
							let listChoiceFile = document.getElementById('listChoiceFile');
							let node = document.createElement('input');
    							node.type="file";
								node.name="pieceJointe[]";
							listChoiceFile.appendChild(node);
						}
					</script>
					<!--<form action="index.php?action=ressourceSupprimer" method ="post" class="form" id="form1">-->
					
				
					<div id="listChoiceFile"></div>
					<!-- END ADD CHOICE FILE -->
					<!--<input type="file" name="pieceJointe[]">
					<br><br>
					<input type="file" name="pieceJointe[]">
					<br><br>
					<input type="file" name="pieceJointe[]">
					<br><br>
					<input type="file" name="pieceJointe[]">-->
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<center><input type="submit" class="btn btn-success" value="Valider"></input></center>
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83
				</div>
			</div>

			</form>
		</div>

    </body>
</html>
