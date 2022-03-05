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
   
   
      </div> <!-- Fin menu page article -->

      <div class="container"> <!-- Début page article -->
      
      <br>
      
      <div class="card-group" id="cartes">

      <?php

        include_once("Modele/etablissement.php");
        //Créer un etab pour recup du libellé etab dans les cartes
        $nouvEtab = new Etablissement();
        
        $nb = count($lesArtCiteScolaire);

        //Pour repérer quand on sera sur la dernière ligne de cartes
        //Et adapter la largeur des colonnes
        $reste = $nb % 4;
        $limite = $nb - $reste;
        $largeur = 3; //Au début, chaque carte fait 3 de large (3x4=12 pour Bootstrap)
        
        $nbcol = 0; //Pour saut de ligne tous les 4 articles;
        
        for($i=0; $i<$nb; $i++) //Pour chaque article
        {
            $laRessourceDeArt = array();
            
            $laRessourceDeArt = $lesArtCiteScolaire[$i]->getLaRessource();
            
            $numArt = $lesArtCiteScolaire[$i]->getida();

            $nbRes = count($laRessourceDeArt);
            
            $HTMLliens="";  
            $HTMLimages="";
            $HTMLvdo="";
            
            if(empty($laRessourceDeArt))
            {
              $HTMLliens = "Aucun document pour cet article";
            }
            else
            {
                if($laRessourceDeArt[0]->getformatr()=="pdf"||$laRessourceDeArt[0]->getformatr()==".pdf")
                {//Préparation du code HTML d affichage des liens des ressources de l'actu
                  $HTMLliens = $HTMLliens.'
                  <a href="'.$laRessourceDeArt[0]->getcheminr().'">
                    '.$laRessourceDeArt[0]->getnomr().'
                  </a>';
                }
                else 
                {
                  if($laRessourceDeArt[0]->getformatr()=="mp4"||$laRessourceDeArt[0]->getformatr()==".mpg4")
                  {

                    $HTMLvdo = $HTMLvdo + '
                    <video width="320" height="240" controls>
                      <source src="'.$laRessourceDeArt[0]->getcheminr().'" type=video/mp4>
                    </video>';
                  }
                  else
                  {
                    if($laRessourceDeArt[0]->getformatr()=="ogg"||$laRessourceDeArt[0]->getformatr()==".ogg")
                    {
                      $HTMLvdo = $HTMLvdo + 
                      '<video width="320" height="240" controls>
                        <source src=”'.$laRessourceDeArt[0]->getcheminr().'” type=video/ogg>
                      </video>';
                    }
                    else
                    {
                      //$im1 = image_crop(10,10,10,10,$laRessourceDeArt[0]->getcheminr());
                      $HTMLimages = $HTMLimages.
                      ' <img src="'.$laRessourceDeArt[0]->getcheminr().'"/>
                      ';
                    }
                  }
                }//Fin du si
            }//Fin du si  

            //DEBUT CARTE : Une CARTE par article -------------------------------------------------------------------
            $nouvEtab->retrieve("IDE=".$lesArtCiteScolaire[$i]->getetaba());

            if($i==0)
            {
              echo '
              <div class="row ligne">';
            }

            if($i==$limite && $reste != 0)
            {//On règle la largeur des cartes de la dernière ligne en fonction de leur nombre
              $largeur = (12/$reste); //Parce que BootStrap travaille avec largeur totale de 12
            }
            echo 
          '
              <div id="'.$lesArtCiteScolaire[$i]->getida().'" class="'.$lesArtCiteScolaire[$i]->getvoiea().' col-lg-'.$largeur.'">
                <div class="card carte" onclick="consulterArt('.$lesArtCiteScolaire[$i]->getida().')">
                  <div class="card-header">'.$nouvEtab->getNomE().'</div>
                  <div class="card-body">
                    <h5 id="'.$numArt.'" class="card-title">'.$lesArtCiteScolaire[$i]->gettitrea().'</h5> 
                    <p class="card-text">'.strip_tags($lesArtCiteScolaire[$i]->getresumea()).'</p>
                    <p class="card-text">'.$HTMLliens.'</p>
                    <p class="card-text">'.$HTMLimages.'</p>
                    <p class="card-text">'.$HTMLvdo.'</p>
                  </div>

                  <!--
                    <div class="card-footer">
                      <small class="text-muted">du '.$lesArtCiteScolaire[$i]->getdatedebr().' au '.$lesArtCiteScolaire[$i]->getdatefinr().'</small>
                    </div> 
                  -->
                </div>
              </div>
              ';
            if($nbcol==3 && $i<>$nb-1)
            {            
              echo '
              </div> <!-- fin div row ligne --> 
              <div class="row ligne">';
              $nbcol = 0;
            }
            else
            {
              $nbcol ++;
            }
        }//Fin du For articles
        echo '
        </div> <!-- fin dernier div row ligne --> ';
      ?>
      </div><!-- card-group -->
    </div> <!-- container principal fin -->
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
      window.location.href = "index.php?action=consulterArticle&ida="+ida;
    }
    
    $('.btn-menu').on('click',function(){
      //Réduire toutes les lignes
      $('.row.ligne').css("height","0px");
      $('.row.ligne div').filter(function () {
        return this.className.match(/\bcol-lg-/);// this is for start with
        //return this.className.match(/apple-/g);// this is for contain selector
      }).css("visibility","hidden");
      $('.'+$(this).attr('id')).css("visibility","visible");
      //agrandir toutes les lignes contenant des cartes visibles
      $('.'+$(this).attr('id')).parent().css("height","362px");
    });
    $('#tout').on('click',function(){
      //agrandir toutes les lignes
      $('.row.ligne').css("height","362px");
      $('.row.ligne div').filter(function () {
        return this.className.match(/\bcol-lg-/);// this is for start with
        //return this.className.match(/apple-/g);// this is for contain selector
      }).css("visibility","visible");
    });
  </script>

</body>

</html>