<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Lycée Eugène Jamot</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">

  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <script type="text/javascript">
    
    function ancrer()
    {
      var diriger = <?php echo json_encode($diriger); ?>;
      if (diriger== 1) {
      window.location.href="#formation"
      }
    }

  </script>

</head>

<body onload="ancrer()" data-spy="scroll" data-target="#navbar-example">

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php?action=init">
                  <h1><span>Lycée</span>Eugène Jamot</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Etablissements<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="index.php?action=init" >Accueil</a></li>
                      <li><a href="index.php?action=collegeEJ" >Collège Jamot</a></li>
                      <li><a href="index.php?action=lyceeEJ" >Lycée Jamot</a></li>
                      <li><a href="index.php?action=lyceeJJ" >Lycée Jaurés</a></li>
                      <li><a href="index.php?action=citeScolaireAct"" >Cité Scolaire</a></li>
                    </ul> 
                  </li>
                  <li>
                    <a class="page-scroll" href="#infos">Informations Pratiques</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#formation">Les Formations</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Nous Contacter</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

<!-- Start infos area -->
  <div id="infos" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center" style="padding-top: 10%">
            <h2>Informations Pratiques</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <div class="single-awesome-project">
                <div class="awesome-img">
                  <a href="#">
                    <img style="width: 400px; height: 600px;" src="<?php echo $uneRessourceIMG->getCheminRessource(); ?>" alt="">
                  </a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a href="<?php echo $uneRessourcePDF->getCheminRessource(); ?>" download="<?php echo $uneRessourcePDF->getNomRessource(); ?>">
                        <h4>Télécharger le pdf</h4>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">Le Lycée Eugène Jamot</h4>
              </a>
              <p>

                <?php

                  echo $unEtablissement->getMotProviseur();

                ?>

              </p>
              <br>
              <br>
              <p>
                Proviseur
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End infos area -->

  <!-- Start formation Area -->
  <div id="formation" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <br>
            <br>
            <h2>Les Formations et les Options</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start formations -page -->
        <div class="awesome-project-1 fix">
          <div class="awesome-menu ">
            <ul class="project-menu">
              <li>
                <a href="#" class="active" data-filter="*">Tout</a>
              </li>
              <li>
                <a href="#" data-filter=".option_seconde_lyceeEJ"> Option Seconde</a>
              </li>
              <li>
                <a href="#" data-filter=".formation_seconde_lyceeEJ"> Formation Seconde</a>
              </li>
              <li>
                <a href="#" data-filter=".specialite_general_lyceeEJ">Spécialités Voie Générale</a>
              </li>
              <li>
                <a href="#" data-filter=".option_general_lyceeEJ">Options Voie Générale</a>
              </li>
              <li>
                <a href="#" data-filter=".technologique_lyceeEJ">Voie Technologique</a>
              </li>
              <li>
                <a href="#" data-filter=".superieur_lyceeEJ">Enseignement Supérieur</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="awesome-project-content">

          <?php

            $nb = count($lesFormations);

            for($i=0; $i<$nb; $i++)
            {

          ?>

          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 <?php echo $lesFormations[$i]->getVoieFormation(); ?>" >
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img style="width: 400px; height: 300px;" src="<?php echo $lesFormations[$i]->cheminImg($lesFormations[$i]->getIdFormation()); ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a href="<?php echo $lesFormations[$i]->cheminPDF($lesFormations[$i]->getIdFormation()); ?>" download="<?php echo $lesFormations[$i]->nomPDF($lesFormations[$i]->getIdFormation()); ?>">
                      <h4> <?php echo $lesFormations[$i]->getNomFormation(); ?> </h4>
                      <span> <?php echo $lesFormations[$i]->getCommentaire(); ?> </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->

          <?php

            }

          ?>

        </div>
      </div>
    </div>
  </div>
  <!-- awesome-formations end -->
  
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Nous Contacter</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Téléphone: <?php echo $unEtablissement->getTelephoneE(); ?><br>
                  <span>Lundi-Vendredi (8h00-18h00)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: <?php echo $unEtablissement->getMailE(); ?> <br>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Adresse: <?php echo $unEtablissement->getRueE(); ?> <br>
                  <span>
                    
                    <?php

                      echo $unEtablissement->getCodePostalE()." ".$unEtablissement->getVilleE();
                    ?>
                    
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.8852445553957!2d2.1649188158934427!3d45.9535757791098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f99470eab55a19%3A0x6fe2598f0adb6015!2s1+Rue+Williams+Dumazet%2C+23200+Aubusson!5e0!3m2!1sfr!2sfr!4v1546857061068" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class=" text-center">
              <p>
                &copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
