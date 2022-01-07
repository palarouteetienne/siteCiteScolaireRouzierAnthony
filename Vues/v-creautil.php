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

<body>

<?php
	// si connecté
	if (isset($_SESSION['emailu']) && !empty($_SESSION['emailu']))
	{
    ?>
	
	<div id="form-main">
		<div id="form-div">
	    	<form action="index.php?action=inserUtil" method ="post" class="form" id="form1">
	      		
	      		<div class="text-center">
	      		<h2> Nouvel Utilisateur </h2>
	      		</div>

	      		<p class="nom">
	        		<input name="nomu" type="text" class="validate[required,custom[onlyLetter]] feedback-input" id="nom" placeholder="Nom" required/>
	      		</p>

	      		<p>
	        		<input name="prenomu" type="text" class="validate[required,custom[onlyLetter]] feedback-input" id="prenom" placeholder="Prénom" required/>
	      		</p>

	      		<p class="etablissement">
					<label class="label-etab" for=".$lesEtab[$i]->getIDE().">Etablissement(s)</label>
					
					<select name="etabu[]" id="etabu" type="select" multiple="multiple" size="6" class="feedback-input">
						<?php


							$nb = count($lesEtab);

							for ($i=0; $i < $nb; $i++)
							{
								echo '<option value="'.$lesEtab[$i]->getIDE().'">'.$lesEtab[$i]->getNomE().'</option>';
							}

						?>

					</select>
					<i>Sélection multiple avec shift enfoncée</i>
	      		</p>
				<p>
					<label for="adminu" class='case-label'>L'utilisateur est-il un administrateur ?</label>
					<input id='adminu' name='adminu' type='checkbox' class='case-input' value='1'/>
				</p>
	      		<p>
	        		<input name="emailu" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Adresse mail" required/>
	      		</p>

	      		<p>
	        		<input onkeypress="capLock(event)" name="mdpu" type="Password" class="validate[required,length[0,50]] feedback-input" placeholder="Mot de passe" id="mdp" required/>
	      		</p>

	      		<SPAN>

	      			<div id="divMayus" style="visibility:hidden">
	      				<p style="color: white;">
	      				🔒 Majuscule Activée
	      				</p>
	      			</div>

	      		</SPAN>

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
    		
    	</div>
  	</div>
    <?php
        }
        // si pas connecté
        else
        {
            echo 
            "<center>
                connectez vous comme administrateur, pour créer un utilisateur
                <BR/>
                <a href='index.php?action=init' style='color: grey;font-size: 20px;'>Retour accueil</a>
            </center>";
        }
    ?>

<footer>

	<div class="text-center">
		<div style="color: white;">
			<p>
		       	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
		    </p>
	    </div>
    </div>

</footer>

</body>

</html>