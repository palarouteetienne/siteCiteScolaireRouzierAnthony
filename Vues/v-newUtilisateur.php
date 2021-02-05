<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Nouvel Utilisateur</title>
	<link href="./css/styleFormulaire.css" rel="stylesheet">
	<script type="text/javascript">
		
		function capLock(e)
		{
 			kc = e.keyCode?e.keyCode:e.which;
 			sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
			if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
			document.getElementById('divMayus').style.visibility = 'visible';
			else
			document.getElementById('divMayus').style.visibility = 'hidden';
		}

		function capLocks(e)
		{
 			kc = e.keyCode?e.keyCode:e.which;
 			sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
			if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
			document.getElementById('divMdp').style.visibility = 'visible';
			else
			document.getElementById('divMdp').style.visibility = 'hidden';
		}

	</script>

</head>

<body style="background:url(img/index/fond3.png) no-repeat center fixed;">

	<div id="form-main" style="padding-top: 25%; padding-bottom: 5%;">
		<div id="form-div">
	    	<form action="index.php?action=creerUtilisateur" method ="post" class="form" id="form1">
	      		
	      		<div class="text-center">
	      		<h2 style="color: white"> Nouvel Utilisateur </h2>
	      		</div>

	      		<p class="nom">
	        		<input name="nom" type="text" class="validate[required,custom[onlyLetter]] feedback-input" id="nom" placeholder="Nom" required/>
	      		</p>

	      		<p class="prenom">
	        		<input name="prenom" type="text" class="validate[required,custom[onlyLetter]] feedback-input" id="prenom" placeholder="Prenom" required/>
	      		</p>

	      		<p class="citeScolaire">
	      			<select name="citeScolaire" class="feedback-input">

	      				<option selected disabled> Sélectionner la Cité Scolaire</option>

	      				<?php

	      				$nb = count($lesCiteScolaires);

	      				for ($i=0; $i < $nb; $i++)
	      				{

	      				?>
	      					<option name"<?php echo $lesCiteScolaires[$i]->getNomCiteScolaire(); ?>" >

	      						<?php

	      						echo $lesCiteScolaires[$i]->getNomCiteScolaire();

	      						?>

	      					</option>

	      				<?php

	      				}

	      				?>
	      					
	      			</select>
	      		</p>

	      		<p class="email">
	        		<input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" required/>
	      		</p>

	      		<p class="mdp">
	        		<input onkeypress="capLock(event)" name="mdp" type="Password" class="validate[required,length[0,50]] feedback-input" placeholder="Password" id="mdp" required/>
	      		</p>

	      		<SPAN>

	      			<div id="divMayus" style="visibility:hidden">
	      				<p style="color: white;">
	      				🔒 Majuscule Activée
	      				</p>
	      			</div>

	      		</SPAN>

	      		<br>
	      		<br>

	      		<div class="text-center">
	      		<h2 style="color: white"> Administrateur </h2>
	      		</div>

	      		<p class="emailA">
	        		<input name="emailA" type="email" class="validate[required,custom[email]] feedback-input" id="emailA" placeholder="Email" required/>
	      		</p>

	      		<p class="mdpA">
	        		<input onkeypress="capLocks(event)" name="mdpA" type="Password" class="validate[required,length[0,50]] feedback-input" placeholder="Password" id="mdpA" required/>
	      		</p>

	      		<SPAN>

	      			<div id="divMdp" style="visibility:hidden">
	      				<p style="color: white;">
	      				🔒 Majuscule Activée
	      				</p>
	      			</div>

	      		</SPAN>

	      		<br>
	      
	      		<div class="submit">
	        		<input type="submit" value="Enregistrer" id="button-blue"/>
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
	      	<br>
	      	<br>
    		<a href="index.php?action=connexion" style="color: white;">Se connecter</a>
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