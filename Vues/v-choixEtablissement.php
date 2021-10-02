<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/jquery/jquery-migrate.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>

        <title>Choix établissement</title>

        <link href="./css/styleFormulaire.css" rel="stylesheet">
    </head>

    <body>
    <script>
            var IDEtabGlobal;

            function montrerListeArt(IDE,NOME) 
            {
                IDEtabGlobal=IDE;
                
                document.getElementById("message").innerHTML = null;
                document.getElementById("boutonEtab").innerHTML=NOME;
                if (IDE.length == 0) 
                {
                    document.getElementById("listeArticlesEtab").innerHTML = "Aucun établissement sélectionné.";
                    return;
                }
                else
                {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() 
                    {
                        if (this.readyState == 4 && this.status == 200)
                        {
                            document.getElementById("listeArticlesEtab").innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "./Vues/getArticleEtab.php?q="+IDE, true);
                    xmlhttp.send();
                }
            }
            
            function supprimerArticle(ida) 
            {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("message").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "Controleurs/a-supprimerArticle.php?q="+ida, true);
                xmlhttp.send();
            }
            
            function ajouterArticle() 
            {   
				window.location.href="index.php?action=saisieArticle&IDEtab="+IDEtabGlobal;
            }
            
        </script>

        <p id="message"></p>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <p>Voulez-vous supprimer l'article</p>
                    </div>
                    <div id="maModale" class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <div>ainsi que tous les documents liés ?</div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <a id="confirmer" class="btn btn-danger btn-ok">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>

    
        <div id="form-main">
            <div id="form-div">
            <span id="message"> </span>
                <form action="index.php?action=choixEtablissement" method ="post" class="form" id="form1">
                    <div class="dropdown">
                        <button id="boutonEtab" class="btn btn-secondary btn-lg" type="button">
                            Choisir un établissements
                        </button>

                        <?php

                            $nb = count($lesEtablissements);
                            if ($nb != 1) {

                        ?>

                                <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">

                            <?php

                                $nb = count($lesEtablissements);

                                for($i=0; $i<$nb; $i++)
                                {

                                    ?>
                                    <button class="dropdown-item" type="button" onclick="montrerListeArt(<?= $lesEtablissements[$i]->getIDE() ?>, '<?= $lesEtablissements[$i]->getNomE() ?>')">
                                    <?= $lesEtablissements[$i]->getNomE() ?>
                                    </button>

                            <?php
                                }
                            ?>

                                </div>

                            <?php  

                            }
                            
                            else{

                            ?>

                                <script>
                                    montrerListeArt(<?= $lesEtablissements[0]->getIDE() ?>,'<?= $lesEtablissements[0]->getNomE() ?>');
                                </script>

                        <?php
                            }
                        ?>
                    </div>
                </form>

                <?php
                include_once "Modele/utilisateur.php";
                $util = new Utilisateur();
                $util->retrieve("MAILU='".$_SESSION['emailu']."'");

                if($util->getadminu() == true)
                {
                    echo 
                    '<div class="text-center">
                        <a href="index.php?action=creautil" style="color: white;">
                            Nouvel utilisateur
                        </a>
                    </div>';
                }
                ?>
                <div class="text-center">
                    <a href="index.php?action=deconnexion" style="color: grey;">
                        Se déconnecter
                    </a>
                </div>
            </div>
            <!--Lister tous les articles de l'établissement choisi dans le dropdown-->
            <span id="listeArticlesEtab"> </span>

        </div>

        <footer>

            <div class="text-center">
                <div style="color: grey;">
                    <p>
                        &copy;  <strong> Cité Scolaire Jamot - Jaurès </strong>. Tous droits réservés
                    </p>

                </div>
            </div>

        </footer>


    <script type="text/javascript">
    $("#confirmer").on("click",function()
    {
        supprimerArticle($('#maModale').html());
        $('#confirm-delete').modal("hide");
    });
    </script>

        <script type="text/javascript">
            $(document).ready(function(){

                //Sélectionne le html de la dernière col. de la ligne = les boutons d'action
                var actions = $("table td:last-child").html();

                // Crée une table avec un formulaire dans une ligne ajoutée sur Clic du Bouton Ajouter Article
                $('body').on('click','button.add-new',function(){

                    //Désactive le bouton le tps de l'édition nouv article
                    $(this).attr("disabled", "disabled");

                    //Récupère le numéro de la dernière ligne du tabkeau
                    var index = $("table tbody tr:last-child").index();

                    //Code html de la ligne à ajouter
                    var row = '<tr>' +
                        '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                        '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                        '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                        '<td>' + actions + '</td>' +
                    '</tr>';
                    //Crée une nouvelle ligne
                    $("table").append(row);

                    $("table tbody tr").eq(index + 1).find(".edit").toggle();
                    $('[data-toggle="tooltip"]').tooltip();
                });
                // Ajoute une ligne sur clic du bouton ajouter du bout de ligne
                $(document).on("click", ".add", function(){
                    var empty = false;

                    //**************************************************************************
                    //SELECTEUR JQUERY A UTILISER POUR AVOIR LES DONNEES SAISIES DANS LA TR
                    //console.log($(this).parents("tr").html());
                    //**************************************************************************
                    
                    var input = $(this).parents("tr").find('input[type="text"]');
                    
                    input.each(function(){
                        if(!$(this).val()){
                            $(this).addClass("error");
                            empty = true;
                        } else{
                            $(this).removeClass("error");
                        }
                    });
                    $(this).parents("tr").find(".error").first().focus();
                    if(!empty){
                        input.each(function(){
                            $(this).parent("td").html($(this).val());
                        });
                        $(this).parents("tr").find(".add, .edit").toggle();
                        $(".add-new").removeAttr("disabled");
                    }		
                });
                // Edit row on edit button click
                $(document).on("click", ".edit", function(){
                    window.location = "index.php?action=modifierArticle&ida="+$(this).parents('tr').attr('id');
                });
                // Delete row on delete button click
                $(document).on("click", ".delete", function(){
                    $(this).parents("tr").remove();
                    $(".add-new").removeAttr("disabled");
                });
            });
        </script>

    </body>
</html>