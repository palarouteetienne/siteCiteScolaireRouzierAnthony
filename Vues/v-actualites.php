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
        window.location.href="#actualites"
      }
      if (diriger == 2) {
        window.location.href="#internat"
      }
      if (diriger == 3) {
        window.location.href="#self"
      }
      if (diriger == 4) {
        window.location.href="#inscription"
      }
      if (diriger == 5) {
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

                <!-- Logo Cité Scolaire 
                <a class="navbar-brand page-scroll sticky-logo" href="index.php?action=init">
                  <h1><span>Cité</span>Scolaire</h1>
								</a>
              </div>
              <!-- Les onglets de la NAV BAR -->
              <!-- Nav tabs 
              <ul class="nav nav-tabs">
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="index.php?action=init#init">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="index.php?action=init#college_EJ">Collège Jamot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="index.php?action=init#lycee_EJ">Lycée Jamot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="index.php?action=init#lycee_JJ">Lycée Jaurès</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="index.php?action=init#cite_Scolaire">Cité Scolaire</a>
                </li>
              
              
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="index.php?action=actualites#actualites">Actualités</a>
                </li>
                <li>
                    <a class="nav-link" data-toggle="tab" href="index.php?action=citeScolaireInt#internat">Internat</a>
                  </li>
                  <li>
                    <a class="nav-link" data-toggle="tab" href="index.php?action=citeScolaireS#self">Restauration</a>
                  </li>
                  <li>
                    <a class="nav-link" data-toggle="tab" href="index.php?action=citeScolaireIns#inscription">Inscription</a>
                  </li>
                  <li>
                    <a class="nav-link" data-toggle="tab" href="index.php?action=citeScolaireBA#bourses_aides">Bourses & Aides</a>
                  </li>
              </ul>
              </div>
            </nav>-->
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Zone actualité -->
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
                  <a href="#" id="tout" value="tout" class="active" data-filter="*">Tout</a>
                </li>
                <li>
                  <a href="#" id="BTS" value="BTS" >BTS</a>
                </li>                
                <li>
                  <a href="#" id="collegeEJ" value="Collège Eugène Jamot" >Collège Eugène Jamot</a>
                </li>
                <li>
                  <a href="#" id="lyceeEJ" value="Lycée Eugène Jamot" >Lycée Eugène Jamot</a>
                </li>
                <li>
                  <a href="#" id="lyceeJJ" value="Lycée Jean Jaurès" >Lycée Jean Jaurès</a>
                </li>
                <li>
                  <a href="#" id="citescolaire" value="cité Scolaire" >cité Scolaire</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- Fin menu page actualité -->
      
      <input class="form-control" id="myInput" type="text" placeholder="Rechercher..">
      <br>
      
      <div class="card-group" id="cartes">

         <?php

            //Créer un etab pour recup du libellé etab dans les cartes
            $nouvEtab = new Etablissement();

            $nb = count($lesActusCiteScolaire);

            for($i=0; $i<$nb; $i++) //Pour chaque ACTU
            {
                
                $lesRessourcesDeArt = array();
                
                $lesRessourcesDeArt = $lesActusCiteScolaire[$i]->getLesRessources();
                
                $nbRes = count($lesRessourcesDeArt);

              $HTMLliens="";  
              $HTMLimages="";

                if(empty($lesRessourcesDeArt))
                {
                  $HTMLliens = "Aucun document sur cette actu";
                }
                else
                {
                  $nbRes = count($lesRessourcesDeArt);
                  //echo "test";
                  for($j=0; $j<$nbRes; $j++)
                  { 
                    if($lesRessourcesDeArt[$j]->getformatr()=="pdf")
                    {//Préparation du code HTML d affichage des liens des ressources de l'actu
                      $HTMLliens = $HTMLliens.'
                      <a href="'.$lesRessourcesDeArt[$j]->getcheminr().'">
                      '.$lesRessourcesDeArt[$j]->getnomr().'
                        </a>';
                  }//Fin du for RESSOURCES
                else 
                {
                  $HTMLimages = $HTMLimages.
                  ' <img src="'.$lesRessourcesDeArt[$j]->getcheminr().'"/>
                      ';
                  //<figure class="slider__item">
                  //<img class="slider__image" src="'.$lesRessourcesDeArt[$j]->getcheminr().'"/>
                  //<figcaption class="slider__caption">
                  //  '.substr($lesRessourcesDeArt[$j]->getnomr(),0,strpos($lesRessourcesDeArt[$j]->getnomr(),".")).'
                 // </figcaption>
                //</figure>';

              }//Fin du si
            }//Fin du for
          }//Fin du si
                //DEBUT CARTE : Une CARTE par ACTU -------------------------------------------------------------------
                $nouvEtab->retrieve("IDE=".$lesActusCiteScolaire[$i]->getetaba());
                echo 
                //<div class="card-deck-group">
                  '<div class="card" style="max-width: "18rem">
                    <div class="card-header">'.$nouvEtab->getNomE().'</div>
                    <div class="card-body">
                      <h5 class="card-title">'.$lesActusCiteScolaire[$i]->gettitrea().'</h5> 
                      <p class="card-text">'.$lesActusCiteScolaire[$i]->getcommentairea().'</p>
                      <p class="card-text">'.$HTMLliens.'</p>
                      <p class="card-text">'.$HTMLimages.'</p>
                    </div>

                    <div class="card-footer">
                      <small class="text-muted">du '.$lesActusCiteScolaire[$i]->getdatedebr().' au '.$lesActusCiteScolaire[$i]->getdatefinr().'</small>
                    </div>
                  </div>            
                ';
            }//Fin du For ACTUS

          ?>
        
        </div>
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
              Design <a href="https://bootstrapmade.com/">Fait avec Bootstrap</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Libraries JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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

  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#cartes .card").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#collegeEJ").on("click",function() {
        var value = $(this).attr('value').toLowerCase();
        $("#cartes .card").filter(function() {
          $(this).toggle($(".card-header",this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#BTS").on("click",function() {
        var value = $(this).attr('value').toLowerCase();
        $("#cartes .card").filter(function() {
          $(this).toggle($(".card-header",this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#lyceeEJ").on("click",function() {
        var value = $(this).attr('value').toLowerCase();
        $("#cartes .card").filter(function() {
          $(this).toggle($(".card-header",this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#lyceeJJ").on("click",function() {
        var value = $(this).attr('value').toLowerCase();
        $("#cartes .card").filter(function() {
          $(this).toggle($(".card-header",this).text().toLowerCase().indexOf(value) > -1)
        });
      });
      
      $('#tout').on('click',function(){
        $("#cartes .card").filter(function() {
          $(this).toggle(true)
        });
      });

      $("#citescolaire").on("click",function() {
        var value = $(this).attr('value').toLowerCase();
        $("#cartes .card").filter(function() {
          $(this).toggle($(".card-header",this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>

</body>

</html>