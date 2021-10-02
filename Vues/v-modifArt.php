<!DOCTYPE html>
<html>
	<head>
		<title>Fin modifications article</title>

		<meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
        <?php
            //Connexion à la BDD

                if($erreur=="0")
                {
                    echo 
                    "<center>
                        Mise à jour réussie.
                        <BR/>
                        <a href='index.php?action=connexion' style='color: grey;font-size: 20px;'>Retour administration</a>
                    </center>";
                }
                else
                {
                    echo "Erreur dans la mise à jour. Code erreur = ".$erreur;
                }
                $etat="modifierArticle";
            ?>
    </body>
</html>