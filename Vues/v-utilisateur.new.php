<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Connexion</title>
	<link href="./css/styleFormulaire.css" rel="stylesheet">
</head>

<body>


	<div id="form-main">
        <div id="form-div">		
    		<form action="index.php?action=formationModifier" method ="post" class="form" id="form1">
	      		
	      		<center>
	      			<h2> Formation </h2>
	      		</center>

	      		<div class="submit">
	        		<input type="submit" value="Modifier" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<form action="index.php?action=formationAjouter" method ="post" class="form" id="form1">

	      		<div class="submit">
	        		<input type="submit" value="Ajouter" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<form action="index.php?action=formationSupprimer" method ="post" class="form" id="form1">

	      		<div class="submit">
	        		<input type="submit" value="Supprimer" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<br>

    		<form action="index.php?action=ressourceAjouter" method ="post" class="form" id="form1">

    			<center>
		      		<h2> Ressource </h2>
	      		</center>

	      		<div class="submit">
	        		<input type="submit" value="Ajouter" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<form action="index.php?action=ressourceSupprimer" method ="post" class="form" id="form1">

	      		<div class="submit">
	        		<input type="submit" value="Supprimer" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<br>
            <center>
                <a href="index.php?action=init" style="color: grey;">Se déconnecter</a>
            </center>
    	</div>
  	</div>

</body>

<footer>

	<center>
		<div style="color: grey;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>

	    </div>
    </center>

</footer>

</html>