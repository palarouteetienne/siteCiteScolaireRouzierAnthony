<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Connexion</title>
	<link href="./css/styleFormulaire.css" rel="stylesheet">
	<script type="text/javascript">
		
		// Fonction permettant la détection de la touche MAJ verouillée pour en avertir l'utilisateur
		function capLock(e)
		{
 			kc = e.keyCode?e.keyCode:e.which;
 			sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
			if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
			document.getElementById('divMayus').style.visibility = 'visible';
			else
			document.getElementById('divMayus').style.visibility = 'hidden';
		}

	</script>

</head>

<body>

	<div id="form-main">
		<div id="form-div">
	    	<form action="index.php?action=choixEtablissement" method="POST" id="form1">
				<?php 
					if (isset($error)) 
					{
						echo $error;
					}
				?>
	      		<div class="text-center">
	      			<h2 style="color: white"> Utilisateur </h2>
	      		</div>

	      		<p class="email">
	        		<input name="emailu" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" required/>
	      		</p>

	      		<p class="mdp">
	        		<input onkeypress="capLock(event)" name="mdpu" type="Password" class="validate[required,length[0,50]] feedback-input" placeholder="Password" id="mdp" required/>
	      		</p>

	      		<SPAN>

	      			<div id="divMayus" style="visibility:hidden">
	      				<p style="color: white;">
	      					🔒 Majuscule Activée
	      				</p>
	      			</div>

	      		</SPAN>

	      		<br>
	      
	      		<div class="submit">
	        		<input type="submit" name="submit" value="Connexion" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
    		</form>
    		<br>
    		<br>
    		<form action="index.php?action=init">
    			<div class="submit">
	        		<input type="submit" value="Retour" id="button-blue"/>
	        		<div class="ease"></div>
	      		</div>
	      	</form>
    	
    	</div>
  	</div>

</body>

<footer>

	<div class="text-center">
		<div style="color: white;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>
	    </div>
    </div>

</footer>

</html>