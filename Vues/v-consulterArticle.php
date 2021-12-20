<!DOCTYPE html>
<html>
	<head>
		<title>Consultation article</title>

		<meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


		
		
		<link href="css/consultArt.css" rel="stylesheet">
        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Darkbox pour la galerie -->
		<link rel="stylesheet" href="darkbox/css/darkbox.css">
		<script src="darkbox/js/darkbox.js"></script>
    </head>
    <body id="page">
		<script>
			$(document).ready(function ()
    		{
			<?php // Traitement des images pour la galerie
				$nb = count($lesRessources);
				$compteurImages = 0;
				echo "var maGalerie = [];";

				for($i=$nb-1; $i>=0; $i--)
				{
					if($lesRessources[$i]->getformatr() != "pdf")
					{
						$compteurImages++;
						//Garder la première image pour l'afficher.
						$premiere = $lesRessources[$i]->getcheminr();
						//Créer un tableau js avec toutes les images.
						echo "maGalerie.push('".$lesRessources[$i]->getcheminr()."');";
					}
				}
				?>
				$('#galerie').click(function(){
        			$(this).darkbox(maGalerie,{wrapAround: true});
			    });
			});
		</script>
 		<div id="corps" class="container-fluid">
			<?php 
				$leType->retrieveById($lArticle->gettypea()); 
				$laVoie->retrieveById($lArticle->getvoiea()); 
			?>

			<div class="row">
				<div id = "titre" class="col-md-12">
					<?php echo $lArticle->gettitrea(); ?>
				</div>
			</div>

			
					<?php 
					if($lArticle->getdatedebr() != "0000-00-00")
					{
					echo '
					<div class="row">
						<div class="col-md-12">Article à paraître du :
							'.$lArticle->getdatedebr().'
							 au : '.$lArticle->getdatefinr().' 
						</div>
					</div>';
					}
					?>

			<div id="commentaire" class="row">
				<div class="col-md-8">
					<?php echo $lArticle->getcommentairea();?>
				</div>
				<div class="col-md-4">

					<?php
						//-----------------------Afficher les PDF --------------------------------
						for($i=0; $i<$nb; $i++)
					 	{
							echo "
						  <div class='row'>
							  <div class='col-sm-12'>";
								  if($lesRessources[$i]->getformatr() == "pdf")
								  {
									echo "<a href='".$lesRessources[$i]->getcheminr()."'><i class='fa fa-file-pdf-o'></i> ".$lesRessources[$i]->getnomr()."</a>";
								  }
								  echo "
							  </div>
						  </div>
						  ";
					  	}

						if($compteurImages > 0) //Si au moins une image, je fais une galerie Darkbox.js
						{
							echo "<div class='row'>
									<div class='col-md-12'>
										<center>
											<img id='galerie' src='".$premiere."'>
										</center>
									</div>
								</div>";
						}
				    ?>
			</div>
		</div>

			<div class="row">
				<div class="col-md-12">
					<center>
						<a href='index.php?action=init' style='color: grey;font-size: 20px;'>Retour accueil</a>
					</center>
				</div>
			</div>

    </body>
</html>