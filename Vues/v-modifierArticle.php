<!DOCTYPE html>
<html>
	<head>
		<title>Saisie modifications article</title>

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
			tinyMCE.init({mode:"textareas"});
		</script>	

        <link href="../css/styleFormulaire.css" rel="sylesheet">

    </head>

    <body>

 		<div class="container-fluid">

			<form action="index.php?action=modifArticle" method ="post" class="form" ENCTYPE="multipart/form-data">

			<div class="row">
				<div class="col-md-12">
					<h3>Modification de l'article <?php echo $lArticle->getida(); ?></h3>
				</div>
			</div>
			<?php 
			$leType->retrieve($lArticle->gettypea()); 
			$laVoie->retrieve($lArticle->getvoiea()); 
			?>
			<div class="row">
				<div class="col-md-4">
					Type d'article
					<select name="typeArticle" required>
						<option value="<?php echo $leType->getidt(); ?>"><?php echo $leType->gettype(); ?></option>
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

				<div class="col-md-8">
					Voie
					<select name="voie" required>
						<option value="<?php echo $laVoie->getidv(); ?>"><?php echo $laVoie->getvoie(); ?></option>
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
			</div>

			<div class="row">
				<div class="col-md-12">
					Titre &nbsp <input type="text" id = "titre" name="titre" size="100" value="<?php echo $lArticle->gettitrea(); ?>"></input>
				</div>
			</div>


			<div class="row">
				<div class="col-md-6">
					Date début parution
					<input type="date" name="dateDebutParution" value="<?php echo $lArticle->getdatedebr(); ?>"/>
				</div>

				<div class="col-md-6">
					Date fin parution<?php echo $lArticle->getdatefinr(); ?>
					<input type="date" name="dateFinParution" value="<?php echo $lArticle->getdatefinr(); ?>"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<center><textarea name="contenuArticle" cols="100" rows="25"><?php echo $lArticle->getcommentairea(); ?></textarea></center>
				</div>
				<div class="col-md-4">
					<center><span class="btn btn-info">Pièce(s) jointe(s) :</span></center>
					<?php
				  		$nb = count($lesRessources);
				  		for($i=0; $i<$nb; $i++)
						{
				      		echo "
							<div class='row'>
							  	<div class='col-sm-2'>"
							  		.$lesRessources[$i]->getIDR().
								"</div>
								<div class='col-sm-8'>";
							if($lesRessources[$i]->getformatr() != "pdf")
							{
								echo "<img src='".$lesRessources[$i]->getcheminr()."' width='30px' height='30px'/>";
							}
							else
							{
								echo $lesRessources[$i]->getnomr()." <i class='fas fa-file-pdf'></i>";
							}
							echo "
								</div>
							</div>
							";
				    	}
				    ?>
					<!-- ADD CHOICE FILE -->
					<button type="button" class="croix" onclick="addChoiceFile()" formnovalidate>
						<span id="l1"></span>	
						<span id="l2"></span>	
					</button>

					<script>
						function addChoiceFile()
						{
							let listChoiceFile = document.getElementById('listChoiceFile');
							let node = document.createElement('input');
    							node.type="file";
								node.name="tabRessources[]";
							listChoiceFile.appendChild(node);
						}
					</script>
				
					<div id="listChoiceFile"></div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<center><input type="submit" class="btn btn-success" value="Valider"></input></center>
				</div>
			</div>

			</form>
		</div>

    </body>
</html>