<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Cité Scolaire Jamot - Jaurès</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
    <div id="menu-recherche">
      <div class="row">
        <div class='col-lg-7 col-md-7 col-sm-7 col-xs-7'>
          <input class="form-control" id="myInput" type="text" placeholder="Rechercher dans la page ..." size="60%">
        </div>
        <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'>
          <i id="loupe" class="fa fa-search" aria-hidden="true"></i>
        </div>
        <div class='col-lg-2 col-md-3 col-sm-3 col-xs-2'>
          <a href="#" id="tout" value="tout" class="active" data-filter="*">Tout afficher</a>
        </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          
              <a href='index.php?action=init' style='color: grey;font-size: 20px;'>Retour accueil</a>

          </div> 
      </div>
    </div>

  <?php
  include "../Modele/voie.php";
  ?>
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
    </div>
<center>
      <?php
      if(strtoupper($typeArt)=='FORMATIONS')
      {
        echo '
        <div id="menu-voies" class="container">
          <div class="btn-group">';
              for($l=0;$l<count($voiesConcernees);$l++)
              {
                echo 
                '<div id="'.$voiesConcernees[$l]->getidv().'" class="btn-menu">'
                  .$voiesConcernees[$l]->getvoie().
                '</div>';
              }
              echo '
          </div>
        </div>
        ';
      }
      ?>
</center>


<center>
    <div class="container"><!-- container principal début -->
        <div class="card-group" id="cartes">

        <?php

          include_once("Modele/etablissement.php");
          //Créer un etab pour recup du libellé etab dans les cartes
          $nouvEtab = new Etablissement();
          
          $nb = count($lesArtCiteScolaire);
          $reste = fmod($nb,3); //Le reste sera 1, 2 tuiles pour la dernière ligne
          $nb = $nb - $reste;
          $nbcol = 0; //Pour saut de ligne tous les 3 articles

          for($i=0; $i<$nb; $i++) //Pour chaque article
          {

              $lesRessourcesDeArt = array();
              
              $lesRessourcesDeArt = $lesArtCiteScolaire[$i]->getLesRessources();
              
              $numArt = $lesArtCiteScolaire[$i]->getida();

              $nbRes = count($lesRessourcesDeArt);
              
              $HTMLliens="";  
              $HTMLimages="";
              $HTMLvdo="";
              
              if(empty($lesRessourcesDeArt))
              {
                $HTMLliens = "Aucun document pour cet article";
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
                    if($lesRessourcesDeArt[$j]->getformatr()=="mp4"||$lesRessourcesDeArt[$j]->getformatr()==".mpg4")
                    {

                      $HTMLvdo = $HTMLvdo + '
                      <video width="320" height="240" controls>
                        <source src="'.$lesRessourcesDeArt[$j]->getcheminr().'" type=video/mp4>
                      </video>';
                    }
                    else
                    {
                      if($lesRessourcesDeArt[$j]->getformatr()=="ogg"||$lesRessourcesDeArt[$j]->getformatr()==".ogg")
                      {
                        $HTMLvdo = $HTMLvdo + 
                        '<video width="320" height="240" controls>
                          <source src=”'.$lesRessourcesDeArt[$j]->getcheminr().'” type=video/ogg>
                        </video>';
                      }
                      else
                      {
                        //$im1 = image_crop(10,10,10,10,$lesRessourcesDeArt[$j]->getcheminr());
                        $HTMLimages = $HTMLimages.
                        ' <img src="'.$lesRessourcesDeArt[$j]->getcheminr().'"/>
                        ';
                      }
                    }
                  }//Fin du si
                }//Fin du for RESSOURCES
              }//Fin du si  

              //DEBUT CARTE : Une CARTE par article -------------------------------------------------------------------
              $nouvEtab->retrieve("IDE=".$lesArtCiteScolaire[$i]->getetaba());
              if($nbcol==0)
              {
                echo '<div class="row ligne">';
              }

              echo 
            '
              <div id="'.$lesArtCiteScolaire[$i]->getida().'" class="col-lg '.$lesArtCiteScolaire[$i]->getvoiea().'">
                <div class="card carte" onclick="consulterArt('.$lesArtCiteScolaire[$i]->getida().')">
                  <div class="card-header">'.$nouvEtab->getNomE().'</div>
                  <div class="card-body">
                    <h5 id="'.$numArt.'" class="card-title">'.$lesArtCiteScolaire[$i]->gettitrea().'</h5> 
                    <p class="card-text">'.$lesArtCiteScolaire[$i]->getresumea().'</p>
                    <p class="card-text">'.$HTMLliens.'</p>
                    <p class="card-text">'.$HTMLimages.'</p>
                    <p class="card-text">'.$HTMLvdo.'</p>
                  </div>

                  <!--
                    <div class="card-footer">
                      <small class="text-muted">du '.$lesArtCiteScolaire[$i]->getdatedebr().' au '.$lesArtCiteScolaire[$i]->getdatefinr().'</small>
                    </div> 
                  -->
                </div><!--fin carte-->
              </div><!--fin col-lg-->         
              ';

              if($nbcol==2) //Pour mettre 3 tuiles d'actus par ligne
              {
                echo '</div><!-- Fin ligne -->';
                $nbcol = -1;
              }
              
              $nbcol ++;
          }//Fin du For Articles pour un nombre d'article multiple de 3

          $gardercompteur = $i;
          $nbcol = 0;

          echo '<div class="row ligne"> <!-- Début ligne articles restant-->';
          
          for($i=0; $i<$reste-1; $i++) //Pour chaque article restant
          {

              $lesRessourcesDeArt = array();
              
              $lesRessourcesDeArt = $lesArtCiteScolaire[$gardercompteur + $i]->getLesRessources();
              
              $numArt = $lesArtCiteScolaire[$gardercompteur + $i]->getida();

              $nbRes = count($lesRessourcesDeArt);
              
              $HTMLliens="";  
              $HTMLimages="";
              $HTMLvdo="";
              
              if(empty($lesRessourcesDeArt))
              {
                $HTMLliens = "Aucun document pour cet article";
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
                    if($lesRessourcesDeArt[$j]->getformatr()=="mp4"||$lesRessourcesDeArt[$j]->getformatr()==".mpg4")
                    {

                      $HTMLvdo = $HTMLvdo + '
                      <video width="320" height="240" controls>
                        <source src="'.$lesRessourcesDeArt[$j]->getcheminr().'" type=video/mp4>
                      </video>';
                    }
                    else
                    {
                      if($lesRessourcesDeArt[$j]->getformatr()=="ogg"||$lesRessourcesDeArt[$j]->getformatr()==".ogg")
                      {
                        $HTMLvdo = $HTMLvdo + 
                        '<video width="320" height="240" controls>
                          <source src=”'.$lesRessourcesDeArt[$j]->getcheminr().'” type=video/ogg>
                        </video>';
                      }
                      else
                      {
                        //$im1 = image_crop(10,10,10,10,$lesRessourcesDeArt[$j]->getcheminr());
                        $HTMLimages = $HTMLimages.
                        ' <img src="'.$lesRessourcesDeArt[$j]->getcheminr().'"/>
                        ';
                      }
                    }
                  }//Fin du si
                }//Fin du for RESSOURCES
              }//Fin du si  

              //DEBUT CARTE : Une CARTE par article -------------------------------------------------------------------
              $nouvEtab->retrieve("IDE=".$lesArtCiteScolaire[$i]->getetaba());

              echo 
            '
                <div id="'.$lesArtCiteScolaire[$gardercompteur + $i]->getida().'" class="col-lg '.$lesArtCiteScolaire[$gardercompteur + $i]->getvoiea().'">
                  <div class="card carte" onclick="consulterArt('.$lesArtCiteScolaire[$gardercompteur + $i]->getida().')">
                    <div class="card-header">'.$nouvEtab->getNomE().'</div>
                    <div class="card-body">
                      <h5 id="'.$numArt.'" class="card-title">'.$lesArtCiteScolaire[$gardercompteur + $i]->gettitrea().'</h5> 
                      <p class="card-text">'.$lesArtCiteScolaire[$gardercompteur + $i]->getresumea().'</p>
                      <p class="card-text">'.$HTMLliens.'</p>
                      <p class="card-text">'.$HTMLimages.'</p>
                      <p class="card-text">'.$HTMLvdo.'</p>
                    </div>

                    <!--
                      <div class="card-footer">
                        <small class="text-muted">du '.$lesArtCiteScolaire[$gardercompteur + $i]->getdatedebr().' au '.$lesArtCiteScolaire[$gardercompteur + $i]->getdatefinr().'</small>
                      </div> 
                    -->
                  </div><!--fin carte-->
                </div><!--fin col-lg-->
              ';
              
          }//Fin du For Articles pour le nombre d'articles restant au delà du multiple de 3
          echo '</div><!-- Fin ligne du reste des articles -->';

        ?>
          
        </div><!-- groupe de carte fin -->
    </div><!-- container principal fin -->
</center>
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
              Design et développement par : BTS SIO</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    function consulterArt(ida)
    {
      console.log('ida '+ida);
      window.location.href = "index.php?action=consulterArticle&ida="+ida;
    }
    $('.btn-menu').on('click',function(){
      $('.col-lg').hide();
      $('.'+this.id).show();
    });
    $('#tout').on('click',function(){
      $('.col-lg').show();
    });
  </script>

</body>

</html>