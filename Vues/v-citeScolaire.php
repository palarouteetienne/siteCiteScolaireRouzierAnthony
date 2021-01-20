<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Cité Scolaire Jamot - Jaurès</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">

  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Sliders Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">
  <link href="css/style-slider-ti.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <script type="text/javascript">
    
    // Fonction permettant de faire un ancrage avec une variable php mis en variable javascript
    function ancrer1()
    {
      var diriger = <?php echo json_encode($diriger1); ?>;
      if (diriger == 1) {
        window.location.href="#internat"
      }
      if (diriger == 2) {
        window.location.href="#self"
      }
      if (diriger == 3) {
        window.location.href="#inscription"
      }
      if (diriger == 4) {
        window.location.href="#bourses_aides"
      }
    }

  </script>

</head>

<body onload="ancrer1()" data-spy="scroll" data-target="#navbar-example">

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->

                <!-- Logo Cité Scolaire -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php?action=init">
                  <h1><span>Cité</span>Scolaire</h1>
								</a>
              </div>
              <!-- Les onglets de la NAV BAR -->
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#init">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#collegeEJ">Collège Jamot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#lyceeEJ">Lycée Jamot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#lyceeJJ">Lycée Jaurès</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#citeScolaire">Cité Scolaire</a>
                </li>
              
              
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#actualite">Actualités</a>
                </li>
                <li>
                    <a class="nav-link" data-toggle="tab" href="#internat">Internat</a>
                  </li>
                  <li>
                    <a class="nav-link" data-toggle="tab" href="#self">Restauration</a>
                  </li>
                  <li>
                    <a class="nav-link" data-toggle="tab" href="#inscription">Inscription</a>
                  </li>
                  <li>
                    <a class="nav-link" data-toggle="tab" href="#bourses_aides">Bourses & Aides</a>
                  </li>
              </ul>
              </div>
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start actualité Area -->
  <div id="actualite" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <br>
            <br>
            <h2>Actualités</h2>
          </div>
        </div>
      </div>
      <div class="row"> <!-- Début menu page actualité -->
        
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">Tout</a>
                </li>
                <li>
                  <a href="#" data-filter=".portes_ouvertes_collegeEJ">Portes Ouvertes Collège Jamot</a>
                </li>
                <li>
                  <a href="#" data-filter=".portes_ouvertes_lyceeEJ">Portes Ouvertes Lycée Jamot</a>
                </li>
                <li>
                  <a href="#" data-filter=".portes_ouvertes_BTS">Portes Ouvertes BTS</a>
                </li>
                <li>
                  <a href="#" data-filter=".portes_ouvertes_lyceeJJ">Portes Ouvertes Lycée Jaurès</a>
                </li>
                <li>
                  <a href="#" data-filter=".autres_actualités">Autres Actualités</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- Fin menu page actualité -->

        <div class="row">

          <?php
            $nb = count($lesActusCiteScolaire);

            for($i=0; $i<$nb; $i++)
            {
              $lesRessourcesDeArt = array();
              
              $lesRessourcesDeArt = $lesActusCiteScolaire[$i]->getLesRessources();

              $HTMLliensPDF="";
              $HTMLimages="";

              echo "HTMLliensPDF".$HTMLliensPDF;
              
              if(empty($lesRessourcesDeArt))
              {
                echo "<div>Aucune ressource pour cette section</div>";
              }
              else
              {
                $nbRes = count($lesRessourcesDeArt);
                for($j=0; $j<$nbRes; $j++)
                {  
                  
                  
                  if($lesRessourcesDeArt[$j]->getformatr()=="pdf")
                  {//Préparation du code HTML d affichage des liens de téléchargement des PDF
                    $HTMLliensPDF = $HTMLliensPDF.
                    ' <a href="'.$lesRessourcesDeArt[$j]->getcheminr().'" download="'.$lesRessourcesDeArt[$j]->getnomr().'">
                        
                      </a>';
                  }
                  else
                  { 
                    
                    //Préparation du code HTML d affichage des images
                    $HTMLimages = $HTMLimages.'
                    <figure class="slider__item">
                      <img class="slider__image" src="'.$lesRessourcesDeArt[$j]->getcheminr().'"/>
                      <figcaption class="slider__caption">
                        '.substr($lesRessourcesDeArt[$j]->getnomr(),0,strpos($lesRessourcesDeArt[$j]->getnomr(),".")).'
                      </figcaption>
                    </figure>';

                  }//Fin du si
                }//Fin du for

              echo "				                
              <!-- Start vignette column -->
              <div class='col-md-4 col-sm-4 col-xs-4'>
                  <div class='single-team-member'>
                      <div class='team-img'>
                        
                            <a href=''>
                              <img src='".$lesRessourcesDeArt[0]->getcheminr()."' alt='Actu'>
                            </a>
                      
                      </div>
                      <a href=''>
                        <div class='team-content text-center'>
                            <h4 style='font-weight: bold; color: black; font-size: 200%;'>".$lesActusCiteScolaire[$i]->gettitrea()."</h4>
                            
                            <br>

                            <h4>
                              <div class='visible'>
                                <ul>
                                    <li>".$lesActusCiteScolaire[$i]->getdatedebr()."</li>
                                    <li>".$lesActusCiteScolaire[$i]->getdatedebr()."</li>
                                    <li>".$lesActusCiteScolaire[$i]->getdatedebr()."</li>
                                </ul>
                              </div>
                            </h4>
                        </div>
                      </a>
                  </div>
              </div>
              <!-- End vignette column -->
";
           
              echo "  <br>Numéro d'article actu : ".$lesActusCiteScolaire[$i]->getida();
              echo "  <div class='cachee'>
                        commentaire actu : ".$lesActusCiteScolaire[$i]->getcommentairea()."
                      </div>";
              echo "</div>";

            }//Fin du For

          }
          ?>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  <!-- Liens vers les PDF -->
              <?php 
                echo $HTMLliensPDF;
              ?>
            </div>
        </div>  <!-- Fin ligne pour les infos sur l'actu -->


        <div class="row">  <!-- Une ligne pour le slider -->
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          </div>
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          
            <div class="slider">
              <?php echo $HTMLimages; ?>

              <div class="slider__btn">
              </div>
            
            </div>

          
          </div>  <!-- fin du slider -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          </div>

        </div>   <!-- fin de la ligne -->
        
      </div><!-- container fin -->
    </div> <!-- actualité fin -->


  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés.
              </p>
            </div>
            <div class="credits">
              Design <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Libraries JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="js/sliderti.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
