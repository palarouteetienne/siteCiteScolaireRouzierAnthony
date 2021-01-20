<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Connexion</title>
	<link href="./css/styleFormulaire.css" rel="stylesheet">
</head>

<!--<body style="background:url(img/index/fond3.png) no-repeat center fixed;">-->
<body>

	<div id="form-main" style="padding-top: 25%; padding-bottom: 5%">
		<div id="form-div">
			<form action="index.php?action=consulterUtil" method ="post" class="form" id="form1">
	      		
	      		<center>
	      		<h2 style="color: white"> Utilisateur </h2>
	      		</center>

	      		<div class="submit">
	        		<input type="submit" value="Consulter" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<br>
    		
	    	<form action="index.php?action=citeScolaireModifier" method ="post" class="form" id="form1">
	      		
	      		<center>
	      		<h2 style="color: white"> Cité Scolaire </h2>
	      		</center>

	      		<div class="submit">
	        		<input type="submit" value="Modifier" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<form action="index.php?action=citeScolaireAjouter" method ="post" class="form" id="form1">

	      		<div class="submit">
	        		<input type="submit" value="Ajouter" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<form action="index.php?action=citeScolaireSupprimer" method ="post" class="form" id="form1">

	      		<div class="submit">
	        		<input type="submit" value="Supprimer" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<br>

    		<form action="index.php?action=etablissementModifier" method ="post" class="form" id="form1">
	      		
	      		<center>
	      		<h2 style="color: white"> Etablissement </h2>
	      		</center>

	      		<div class="submit">
	        		<input type="submit" value="Modifier" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<form action="index.php?action=etablissementAjouter" method ="post" class="form" id="form1">

	      		<div class="submit">
	        		<input type="submit" value="Ajouter" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<form action="index.php?action=etablissementSupprimer" method ="post" class="form" id="form1">

	      		<div class="submit">
	        		<input type="submit" value="Supprimer" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<br>

    		<form action="index.php?action=formationModifier" method ="post" class="form" id="form1">
	      		
	      		<center>
	      		<h2 style="color: white"> Formation </h2>
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
	      		<h2 style="color: white"> Ressource </h2>
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

    		<a href="index.php?action=init" style="color: white;">Se déconnecter</a>
    	</div>
  	</div>

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