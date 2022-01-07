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
	      		
	      		<div class="text-center">
	      			<h2> Formations </h2>
	      		</div>

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

    			<div class="text-center">
		      		<h2> Ressource </h2>
	      		</div>

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
            <div class="text-center">
                <a href="index.php?action=init" style="color: grey;">Se déconnecter</a>
            </div>
    	</div>
  	</div>

</body>

<footer>

	<div class="text-center">
		<div style="color: grey;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>

	    </div>
    </div>

</footer>

</html>