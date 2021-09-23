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
  
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- Zone actualité -->
  <div id="<?php echo $typeArt; ?>" class="portfolio-area area-padding fix">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <br>
            <br>
            <h2><?php echo $typeArt; ?></h2>
          </div>
        </div>
      </div>
      <div class="row"> <!-- Début menu page actualité -->
        
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" id="tout" value="tout" class="active" data-filter="*">Tout afficher</a>
                </li>
                <li>
                  <input class="form-control" id="myInput" type="text" placeholder="Rechercher..">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- Fin menu page actualité -->
      
      <br>
      
      <div class="card-group" id="cartes">

      <?php

        include_once("Modele/etablissement.php");
        //Créer un etab pour recup du libellé etab dans les cartes
        $nouvEtab = new Etablissement();
        
        $nb = count($lesArtCiteScolaire);
        $nbcol = 0; //Pour saut de ligne toutes les 4 actus;

        for($i=0; $i<$nb; $i++) //Pour chaque ACTU
        {

            $lesRessourcesDeArt = array();
            
            $lesRessourcesDeArt = $lesArtCiteScolaire[$i]->getLesRessources();
            
            $numArt = $lesArtCiteScolaire[$i]->getida();

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

              for($j=0;$j<$nbRes;$j++)
              {
                if($lesRessourcesDeArt[$j]->getformatr()=="pdf"||$lesRessourcesDeArt[$j]->getformatr()==".pdf")
                {//Préparation du code HTML d affichage des liens des ressources de l'actu
                  $HTMLliens = $HTMLliens.'
                  <a href="'.$lesRessourcesDeArt[$j]->getcheminr().'">
                  '.$lesRessourcesDeArt[$j]->getnomr().'
                  </a>';
                }
                else 
                {
                  //$im1 = image_crop(10,10,10,10,$lesRessourcesDeArt[$j]->getcheminr());
                  $HTMLimages = $HTMLimages.
                  ' <img src="'.$lesRessourcesDeArt[$j]->getcheminr().'"/>
                      ';
                }//Fin du si
              }//Fin du for RESSOURCES
            }//Fin du si  
            //DEBUT CARTE : Une CARTE par ACTU -------------------------------------------------------------------
            $nouvEtab->retrieve("IDE=".$lesArtCiteScolaire[$i]->getetaba());
            if($nbcol==0)
            {
              echo '<div class="row ligne">';
            }
            echo 
            //<div class="card-deck-group">
            '<div id="'.$lesArtCiteScolaire[$i]->getida().'" class="col-lg">
              <div class="card carte">
                <div class="card-header">'.$nouvEtab->getNomE().'</div>
                <div class="card-body">
                  <h5 id="'.$numArt.'" class="card-title">'.$lesArtCiteScolaire[$i]->gettitrea().'</h5> 
                  <p class="card-text">'.$lesArtCiteScolaire[$i]->getcommentairea().'</p>
                  <p class="card-text">'.$HTMLliens.'</p>
                  <p class="card-text">'.$HTMLimages.'</p>
                </div>

                <div class="card-footer">
                  <small class="text-muted">du '.$lesArtCiteScolaire[$i]->getdatedebr().' au '.$lesArtCiteScolaire[$i]->getdatefinr().'</small>
                </div>
              </div>
            </div>            
            ';
            if($nbcol==3 && $i<>$nb-1)
            {
              echo '</div><div class="row ligne">';
              $nbcol = 0;
            }
            
            $nbcol ++;
        }//Fin du For ACTUS
      ?>
        
        </div>
      </div><!-- container principal fin -->
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
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
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
          $(this).toggle(true);
          $("#myInput").val("");
        });
      });

      $("#citescolaire").on("click",function() {
        var value = $(this).attr('value').toLowerCase();
        $("#cartes .card").filter(function() {
          $(this).toggle($(".card-header",this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    function void consuleterArt()
    {
      //var x = $(this).attr("id");
      console.log("x");
    }
  </script>

</body>

</html>