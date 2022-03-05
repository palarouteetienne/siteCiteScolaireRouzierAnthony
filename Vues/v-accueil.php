<!DOCTYPE html>
 <html lang="FR">
	<head>

		<meta charset="UTF-8">
	  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">
		<link href="img/favicon.png" rel="icon">

		<!-- Bootstrap CSS File -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


		<!-- Libraries CSS Files -->
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="lib/animate/animate.min.css" rel="stylesheet">
		<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

		<!-- Main Stylesheet File -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

		<!-- Nivo Slider Theme -->
		<link href="css/nivo-slider-theme.css" rel="stylesheet">

		<!-- Responsive Stylesheet File -->
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/styleBandeauActu.css" rel="stylesheet">

		<title> Jamot - Jaurès </title>

	</head>

	<body data-spy="scroll">
		<div id="important" class="effet">
			<i id="croix" class="fa fa-window-close" aria-hidden="true"><div id="aide">Fermer</div></i>
			<?php
				for($i=0;$i<count($actus);$i++)
				{
					setlocale(LC_TIME, "fr_FR.UTF-8"); //Pour les accents sur les mois de la date
					echo '<div id="liste-actu">
							<div class="text-center">
								<form id="'.$actus[$i]->getida().'" method="POST" onclick="document.getElementById('.$actus[$i]->getida().
									').submit();" action="index.php?action=citeScolaire&typeArt='.$actus[$i]->gettypea().'&etab='.$actus[$i]->getetaba().'">
									<p class="grosvert">'
										.$actus[$i]->gettitrea().'
									</p>
									<p class="fleche">
										<span class="circle">
											<i class="ga fa fa-hand-pointer-o"></i>
										</span>
									</p>
								</form>
							</div>
							<div class="text-center noir">
								<div>
									Le '.
									strftime("%d %B", strtotime($actus[$i]->getdatedebr())).
								'</div>
							</div>
						</div>';
				}
			?>
		</div>
		<img id="logo"/> <!-- Logo partenaires cf. Jquery en bas -->
		<video id="vdo" width=320  height=240 controls poster="img/logo-blanc.png">
			Cette vidéo ne peut être affichée sur votre navigateur.<br>
			Elle est disponible à <a href="https://vimeo.com/654855486/7e6cec2774"> vidéo cité scolaire </a> . 
		</video>
		<div id="logo-fond">
			<img src="img/logo_blanc.png"/>
		</div>
		
		<!-- Début Page accueil -->
		<div class="boite-boite">
			<div id="b" class="boite">
				<div id="actualites">
					ACTUS !
				</div>
				<!-- ENCART ACTUS -->
				<div class = "oddboxinner">
					<div class="table">
						<?php
							for($i=0;$i<count($actus);$i++)
							{
								setlocale(LC_TIME, "fr_FR.UTF-8"); //Pour les accents sur les mois de la date
								echo '<div class="row">
										<div class="col vert">
											<form method="POST" onclick="$(this).submit();" action="index.php?action=citeScolaire&typeArt='.$actus[$i]->gettypea().'&etab='.$actus[$i]->getetaba().'">'
												.$actus[$i]->gettitrea().
											'</form>
										</div>
										<div class="col blanc">Le '.
											strftime("%d %B", strtotime($actus[$i]->getdatedebr())).
										'</div>
									</div>';
							}
						?>
					</div>	
				</div>

				<div class="table">
					<div class="row">
						<div id="mot-proviseur" class="col titre-menu">
							<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modaleMotPro">
								Mot du Proviseur
							</button>
						</div>
					</div>
					<div id="direction" class="row g-0">
						<div class="col-12 g-0">
							<div class="row g-0">
								<div class="col-12">
									Equipe Direction :
								</div>
							</div>	
							<div class="row g-0">
								<div class="col-7 chefs-menu">
									Mme Dubois
								</div>
								<div class="col-5 fonctions-menu">
									Prov.
								</div>
							</div>
							<div class="row g-0">
								<div class="col-7 chefs-menu">
									M. Raia
								</div>
								<div class="col-5 fonctions-menu">
									Prov. Adj.
								</div>
							</div>
							<div class="row g-0">
								<div class="col-7 chefs-menu">
									M. Gibouret
								</div>
								<div class="col-5 fonctions-menu">
									Princ. Adj.
								</div>
							</div>
							<div class="row g-0">
								<div class="col-7 chefs-menu">
									M. Célerier
								</div>
								<div class="col-5 fonctions-menu">
									Chef Travaux
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col titre-menu">
							<a href="index.php?action=citeScolaire&typeArt=2&etab=4">
								<div class="titre-menu">Internat</div>
							</a>
							<a href="index.php?action=citeScolaire&typeArt=3&etab=4">
								<div class="titre-menu">Self</div>
							</a>
							<a href="index.php?action=citeScolaire&typeArt=7&etab=4">
								<div class="titre-menu">Inscription</div>
							</a>
							<a href="index.php?action=citeScolaire&typeArt=4&etab=4">
								<div class="titre-menu">Bourses / Aides</div>
							</a>
						</div>
					</div>
				</div>	

			</div>
		</div>
		<div id="modaleMotPro" class="modal" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Le Mot de la Proviseure</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div id="texteMotPro" class="modal-body">
							<?php
								echo $cite->getmotProviseur();
							?>
					</div>
				</div>
			</div>
		</div>
		<div id="accueil">
		    <div class="intro-content display-table">
		      	<div class="table-cell">
				  	<div class="boite-boite-vignette">
		        		<div id="bv" class="container conteneur-vignettes">

			         	<!-- Start Vignette Area -->
			          	<div id="team" class="our-team-area area-padding">
			            	<div class="container">
							<div class="row espacement">
				                <!-- Start vignette colonne établissement -->
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="single-team-member">
										<div class="team-img">
											
												<a href="#college_EJ">
													<img src="img/index/lycee_jamot.jpg" class="bulles" alt="">
												</a>
											
										</div>
										<a href="#college_EJ">
											<div class="team-content text-center">
												<h4 style="font-weight: bold; color: grey; font-size: 200%;">Collège</h4>

												<h4>
													<div class='visible'>
														<ul>
															<li>Eugène Jamot</li>
															<li>Eugène Jamot</li>
															<li>Eugène Jamot</li>
														</ul>
													</div>
												</h4>
											</div>
										</a>
									</div>
									<div class="single-team-member">
										<div class="team-img">
											
												<a href="#lycee_JJ">
													<img src="img/index/lycee_jaures.jpg" class="bulles" alt="">
												</a>
										
										</div>
										<a href="#lycee_JJ">
											<div class="team-content text-center">
												<h4 style="font-weight: bold; color: grey; font-size: 200%;">Lycée</h4>
												

												<h4>
													<div class='visible'>
														<ul>
															<li>Jean Jaurès</li>
															<li>Professionnel</li>
															<li>Professionnel</li>
														</ul>
													</div>
												</h4>
											</div>
										</a>
									</div>
									<div class="single-team-member">
										<div class="team-img">
										
											<a href="#lycee_EJ">
												<img src="img/index/aubusson.jpg" class="bulles" alt="">
											</a>
										
										</div>
										<a href="#lycee_EJ">
											<div class="team-content text-center">
												<h4 style="font-weight: bold; color: grey; font-size: 200%;">Lycée</h4>

												<h4>
													<div class='visible'>
														<ul>
															<li>Eugène Jamot</li>
															<li>Général</li>
															<li>Technologique</li>
														</ul>
													</div>
												</h4>
											</div>
										</a>
									</div>
								</div>
							<!-- End vignette column -->

		            		</div>
		        		</div>
		    			<!-- End vignette Area -->

						</div>
					</div>
					<!-- End boite-boite-vignette -->
					</div>
				</div>
			</div>
		</div>
	  	<!-- End Intro -->

  		<!-- Start college EJ Area -->
	  	<div id="college_EJ" class="portfolio-area area-padding fix">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	          			<div class="section-headline text-center">
	            			<h2>Le collège Eugène Jamot</h2>
	          			</div>
	        		</div>
	      		</div>

			    <section class="about-mf sect-pt4 route">
			        <div class="container">
			          	<div class="row">
			            	<div class="col-sm-12">
			              		<div class="box-shadow-full">
			                		<div class="row">
			                  			<div class="col-md-6">
			                    			<div class="row">
			                      				<div class="col-sm-6 col-md-5">
			                        				<div class="about-img">

			                          					<br>
			                          					<br>

			                          					<img src="img/index/lycee_jamot.jpg" class="img-fluid rounded b-shadow-a" alt="">
			                        				</div>
			                      				</div>
			                      				<div class="col-sm-6 col-md-7">
			                        				<div class="about-info">
			                          					<p>
			                            					<span class="title-s">Téléphone : </span>
			                            					<span><?php echo $college->getTelephoneE(); ?></span>
			                          					</p>
			                          					<p>
							                            	<span class="title-s">Email : </span>
							                            	<span><?php echo $college->getemailE(); ?></span>
							                          	</p>
							                          	<p>
							                            	<span class="title-s">Adresse : </span>
							                            	<span> <?php echo $college->getRueE(); ?> <br> <?php echo $cite->getCodePostalE(); ?> <br> <?php echo $cite->getVilleE(); ?> </span>
							                          	</p>
			                        				</div>
			                      				</div>
											</div>
			                    			
											<div class="row">
												<div class="col-lg-12 col-md-12 col-xs-12">	
													<p class="title-s">Carte de navigation</p>
													<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.8852445553957!2d2.1649188158934427!3d45.9535757791098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f99470eab55a19%3A0x6fe2598f0adb6015!2s1+Rue+Williams+Dumazet%2C+23200+Aubusson!5e0!3m2!1sfr!2sfr!4v1546857061068" width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
												</div>
											</div>
			                  			</div><!-- Fin col carte -->
			                  			<div class="col-md-6">
						                    <div class="about-me pt-4 pt-md-0">
						                      	<div class="title-box-2">
						                        	<h5 class="title-left">
						                          		Présentation
						                        	</h5>
						                      	</div>
						                      	<p class="lead">
						                        	<section class="about-mf sect-pt4 route">
						                          		<div>
						                            		<div class="row">
						                              			<div class="col-sm-12">
						                                			<div class="box-shadow-full">
						                                  				<div class="row">
						                                    				<div class="skill-mf">
						                                      					<p>

											                                        <?php

											                                        echo $college->getMotProviseur();

											                                        ?>

							                                     	 			</p>
							                                    			</div>
							                                  			</div>
							                                		</div>
							                              		</div>
							                            	</div>
							                          	</div>
							                        </section>
			                      				</p>
							        			<!-- Bouton de navigation vers le collège Eugène Jamot -->
												<center>
													<a href="index.php?action=citeScolaire&typeArt=6&etab=1">
														<button type="button" class="button button-a  button-rounded">Informations Pratiques</button>
													</a>
													<a href="index.php?action=citeScolaire&typeArt=1&etab=1">
														<button type="button" class="button button-a  button-rounded">Formations</button>
													</a>
												</center>
			                    			</div>
			                  			</div><!-- Fin col présentation -->
			                		</div>
			              		</div>
			            	</div>
			          	</div>
			        </div>
			    </section>
    		</div>
  		</div>
  		<!-- End college EJ Area -->

  		<!-- Start lycee EJ Area -->
	  	<div id="lycee_EJ" class="portfolio-area area-padding fix">
	    	<div class="container">
	      		<div class="row">
	        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	          			<div class="section-headline text-center">
	            			<h2>Le lycée Eugène Jamot</h2>
	          			</div>
	        		</div>
	      		</div>

	      		<section class="about-mf sect-pt4 route">
			        <div class="container">
			          	<div class="row">
			            	<div class="col-sm-12">
			              		<div class="box-shadow-full">
			                		<div class="row">
			                  			<div class="col-md-6">
			                    
			                    			<br>
			                    			<br>

			                    			<div class="row">
			                      				<div class="col-sm-6 col-md-5">
			                        				<div class="about-img">
			                          					<img src="img/index/lycee_jamot.jpg" class="img-fluid rounded b-shadow-a" alt="">
			                        				</div>
			                      				</div>
			                      				<div class="col-sm-6 col-md-7">
			                        				<div class="about-info">
								                        <p>
									                        <span class="title-s">Téléphone : </span>
									                        <span><?php echo $jamot->getTelephoneE(); ?></span>
								                        </p>
								                        <p>
								                            <span class="title-s">Email : </span>
								                            <span><?php echo $jamot->geteMailE(); ?></span>
								                        </p>
								                        <p>
								                        	<span class="title-s">Adresse : </span>
								                            <span> <?php echo $jamot->getRueE(); ?> <br> <?php echo $college->getCodePostalE(); ?> <br> <?php echo $college->getVilleE(); ?></span>
								                        </p>
			                        				</div>
			                      				</div>
			                    			</div>
			                    				
			                    			<br>
			                    			<br>

			                    			<div class="skill-mf">
			                      				<p class="title-s">Carte de navigation</p>
			                      				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.8852445553957!2d2.1649188158934427!3d45.9535757791098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f99470eab55a19%3A0x6fe2598f0adb6015!2s1+Rue+Williams+Dumazet%2C+23200+Aubusson!5e0!3m2!1sfr!2sfr!4v1546857061068" width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
			                    			</div>
			                  			</div>
			                  			<div class="col-md-6">
			                    			<div class="about-me pt-4 pt-md-0">
			                      				<div class="title-box-2">
			                        				<h5 class="title-left">
			                          					Présentation
			                        				</h5>
			                      				</div>
			                      				<p class="lead">
								                    <section class="about-mf sect-pt4 route">
								                        <div>
								                           	<div class="row">
								                              	<div class="col-sm-12">
								                                	<div class="box-shadow-full">
								                                  		<div class="row">
								                                    		<div class="skill-mf">
								                                      			<p>

												                                    <?php

												                                        echo $jamot->getMotProviseur();

												                                    ?>

								                                      			</p>
								                                    		</div>
								                                  		</div>
								                                	</div>
								                              	</div>
								                            </div>
								                        </div>
								                    </section>
			                      				</p>
								  	      		<!-- Bouton de navigation vers le lycée Eugène Jamot -->
												<center>
													<a href="index.php?action=citeScolaire&typeArt=6&etab=2">
														<button type="button" class="button button-a  button-rounded">Informations Pratiques</button>
													</a>
													<a href="index.php?action=citeScolaire&typeArt=1&etab=2">
														<button type="button" class="button button-a  button-rounded">Formations</button>
													</a>
												</center>
			                    			</div>
			                  			</div>
			                		</div>
			              		</div>
			            	</div>
			          	</div>
			        </div>
			    </section>
	    	</div>
	  	</div>
  		<!-- End lycee EJ Area -->

  		<!-- Start lycee JJ Area -->
  		<div id="lycee_JJ" class="portfolio-area area-padding fix">
    		<div class="container">
      			<div class="row">
        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          				<div class="section-headline text-center">
            				<h2>Le lycée Jean Jaurès</h2>
          				</div>
        			</div>
      			</div>

			    <section class="about-mf sect-pt4 route">
			        <div class="container">
			          	<div class="row">
			            	<div class="col-sm-12">
			              		<div class="box-shadow-full">
			                		<div class="row">
				                  		<div class="col-md-6">
				                    	
				                    		<br>
				                    		<br>

				                    		<div class="row">
				                      			<div class="col-sm-6 col-md-5">
				                        			<div class="about-img">
				                          				<img src="img/index/lycee_jaures.jpg" class="img-fluid rounded b-shadow-a" alt="">
				                        			</div>
				                      			</div>
				                      			<div class="col-sm-6 col-md-7">
				                        			<div class="about-info">
				                          				<p>
							                            	<span class="title-s">Téléphone : </span>
							                            	<span><?php echo $jaures->getTelephoneE(); ?></span>
							                          	</p>
							                          	<p>
							                            	<span class="title-s">Email : </span>
							                            	<span><?php echo $jaures->geteMailE(); ?></span>
							                          	</p>
								                        <p>
								                            <span class="title-s">Adresse : </span>
							                            	<span> <?php echo $jaures->getRueE(); ?> <br> <?php echo $jamot->getCodePostalE(); ?> <br> <?php echo $jamot->getVilleE(); ?></span>
							                          	</p>
				                        			</div>
				                      			</div>
				                    		</div>
				                    
				                    		<br>
				                    		<br>

				                    		<div class="skill-mf">
				                      			<p class="title-s">Carte de navigation</p>
				                      			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.9492843633857!2d2.172266415211766!3d45.95229630876297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f9947c8a7b8337%3A0x2d7a3cc4c39cbf18!2s38%20Rue%20Jean%20Jaur%C3%A8s%2C%2023200%20Aubusson!5e0!3m2!1sen!2sfr!4v1575767843664!5m2!1sen!2sfr" width="auto" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				                    		</div>
				                  		</div>
				                  		<div class="col-md-6">
						                    <div class="about-me pt-4 pt-md-0">
						                      	<div class="title-box-2">
						                        	<h5 class="title-left">
						                          		Présentation
						                        	</h5>
						                      	</div>
				                      			<p class="lead">
							                        <section class="about-mf sect-pt4 route">
							                          	<div>
							                            	<div class="row">
							                              		<div class="col-sm-12">
							                                		<div class="box-shadow-full">
							                                  			<div class="row">
							                                    			<div class="skill-mf">
							                                      				<p>

											                                        <?php

											                                        	echo $jaures->getMotProviseur();

											                                        ?>

							                                      				</p>
							                                    			</div>
							                                  			</div>
							                                		</div>
							                              		</div>
							                            	</div>
							                          	</div>
							                        </section>
				                      			</p>
							        			<!-- Bouton de navigation vers le lycée Jean Jaurès -->
												<center>
													<a href="index.php?action=citeScolaire&typeArt=6&etab=3">
														<button type="button" class="button button-a  button-rounded">Informations Pratiques</button>
													</a>
													<a href="index.php?action=citeScolaire&typeArt=1&etab=3">
														<button type="button" class="button button-a  button-rounded">Formations</button>
													</a>
												</center>
				                    		</div>
				                  		</div>
			                		</div>
			              		</div>
			            	</div>
			        	</div>
			    	</div>
				</section>
    		</div>
  		</div>
  		<!-- End lycee JJ Area -->
  		<!-- Start Footer bottom Area -->
  		<footer>
			  <div class="footer-area-bottom">
				  <div class="container">
					  <div class="row">
						  <div class="col-md-12 col-sm-12 col-xs-12">
							  <!--<div class=" text-center"  -->
								  <a id="pointless" href="
								  <?php 
									echo 'index.php?action=connexion';
									?>">

<p>
	&copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
</p></a>

</div>
</div>
</div>
</div>
</div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/knob/jquery.knob.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/parallax/parallax.js"></script>
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/appear/jquery.appear.js"></script>
		<script src="lib/isotope/isotope.pkgd.min.js"></script>

		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/jquery/jquery-migrate.min.js"></script>
		<script src="lib/popper/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="lib/easing/easing.min.js"></script>
		<script src="lib/counterup/jquery.waypoints.min.js"></script>
		<script src="lib/counterup/jquery.counterup.js"></script>
		<script src="lib/owlcarousel/owl.carousel.min.js"></script>
		<script src="lib/lightbox/js/lightbox.min.js"></script>
		<script src="lib/typed/typed.min.js"></script>
		<!-- Contact Form JavaScript File -->
		<script src="contactform/contactform.js"></script>

		<!-- Template Main Javascript File -->
		<script src="js/main.js"></script>

		<script type="text/javascript">
  			let images= [<?php
					$dossier='img/logos';
					$fichiers=scandir($dossier);
					for($i=0;$i<count($fichiers);$i++)
					{
						if($fichiers[$i] != "." && $fichiers[$i] != "..")
						{
							if($i==count($fichiers)-1)
							{
								echo '"'.$fichiers[$i].'"';
							}
							else
							{
								echo '"'.$fichiers[$i].'",';
							}
						}
					}
				?>];
			
			i = 0;

			var lance = setInterval(
				function logos() {
					const image=document.getElementById("logo");
					if(i>=0 && i<images.length)
					{
						image.src="img/logos/"+images[i];
						i+=1;
					}
					else
					{
						i=0;
						image.src="img/logos/"+images[i];
					}
					
				},2000);
			
		</script>
		<script type="text/javascript">
			$('#croix').on("click", function(){
				$('#important').css("display","none");
			});
			$('#croix').on("mouseover", function(){
				$('#aide').css("display","block");
				$('#aide').css("rotate","-25deg");
			});
			$('#croix').on("mouseout", function(){
				$('#aide').css("display","none");
				$('#aide').css("rotate","0deg");
			});
			$(window).load(function () {

				$('#important').animate(
				{
					opacity: "+=10"
				},  
				{
					duration: 5000,
					specialEasing: 
					{
						opacity: "easeOutBounce"
					}
				});

				var niveau = $(window).scrollTop();
				if(niveau  > 350 || $("#bv").is(':visible')) 
				{
					$("#logo-fond").css('filter', 'blur(5px)');
					$("#logo-fond").css('opacity', '0.2');
					$("#logo-fond").css('z-index', '-10');
				}
				else
				{
					$("#logo-fond").css('filter', 'blur(0px)');
					$("#logo-fond").css('opacity', '1');
					$("#logo-fond").css('z-index', '3');
				}
			});
			$("#bv").mouseover(function () {
				$("#logo-fond,.box-shadow-full").css('filter', 'blur(5px)');
				$("#logo-fond,.box-shadow-full").css('opacity', '0.2');
				$("#logo-fond,.box-shadow-full").css('z-index', '-10');

			});
			$("#bv").mouseout(function () {
				var niveau = $(window).scrollTop();
				if(niveau  <= 350) 
				{
					$("#logo-fond").css('filter', 'blur(0px)');
					$("#logo-fond").css('opacity', '1');
					$("#logo-fond").css('z-index', '3');
				}
				$(".box-shadow-full").css('filter', 'blur(0px)');
				$(".box-shadow-full").css('opacity', '1');
				$(".box-shadow-full").css('z-index', '3');
			});
			$("#b").mouseover(function () {
				$("#logo-fond,.box-shadow-full").css('filter', 'blur(5px)');
				$("#logo-fond,.box-shadow-full").css('opacity', '0.2');
				$("#logo-fond,.box-shadow-full").css('z-index', '-10');
			});
			$("#b").mouseout(function () {var niveau = $(window).scrollTop();
				if(niveau  <= 350) 
				{
					$("#logo-fond").css('filter', 'blur(0px)');
					$("#logo-fond").css('opacity', '1');
					$("#logo-fond").css('z-index', '3');
				}
				$(".box-shadow-full").css('filter', 'blur(0px)');
				$(".box-shadow-full").css('opacity', '1');
				$(".box-shadow-full").css('z-index', '3');
			});
			$( window ).on( "load", function() {
				$("#vdo").html('<source src="vdo/teaser_091221.mp4" type="video/mp4"></source>');
			});
			$(window).scroll(function () {
				var niveau = $(window).scrollTop();

				if(niveau  > 350) 
				{
					$("#logo-fond").css('filter', 'blur(5px)');
					$("#logo-fond").css('opacity', '0.2');
					$("#logo-fond").css('z-index', '-10');
				}
				else
				{
					$("#logo-fond").css('filter', 'blur(0px)');
					$("#logo-fond").css('opacity', '1');
					$("#logo-fond").css('z-index', '3');
				}
			
			});
			$("#mot-proviseur").click(function () {
				$(".mot-du-pro").toggle();
			});	
		</script>
	</body>

</html>