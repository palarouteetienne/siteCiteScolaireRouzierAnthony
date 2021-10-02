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

    </head>
    <body>
 		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3>Consultation de l'article <?php echo $lArticle->getida(); ?></h3>
				</div>
			</div>
			<?php 
				$leType->retrieveById($lArticle->gettypea()); 
				$laVoie->retrieveById($lArticle->getvoiea()); 
			?>

			<div class="row">
				<div class="col-md-12">
					<?php echo $lArticle->gettitrea(); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					Date début parution
					<?php echo $lArticle->getdatedebr(); ?>
				</div>

				<div class="col-md-6">
					Date fin parution<?php echo $lArticle->getdatefinr(); ?>
					<?php echo $lArticle->getdatefinr(); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<center><?php echo $lArticle->getcommentairea();?></center>
				</div>
				<div class="col-md-4">

					<?php
				  		$nb = count($lesRessources);
				  		for($i=0; $i<$nb; $i++)
						{
				      		echo "
							<div class='row'>
								<div class='col-sm-12'>";
									if($lesRessources[$i]->getformatr() != "pdf")
									{
										echo "<img class='ressource' src='".$lesRessources[$i]->getcheminr()."' width='30px' height='30px'/>";
									}
									echo "
								</div>
							</div>
							";
				    	}
						for($i=0; $i<$nb; $i++)
						{
				      		echo "
							<div class='row'>
								<div class='col-sm-12'>";
									if($lesRessources[$i]->getformatr() == "pdf")
									{
										echo "
										<div class='row'>
											<div class='col-sm-4'>
												<i class='fa fa-file-pdf-o fa-3x' style='color:purple'></i>
											</div>
											<div class='col-sm-8 align-text-bottom'>
												".$lesRessources[$i]->getnomr()."
											</div>
										</div>";
									}
									echo "
								</div>
							</div>
							";
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