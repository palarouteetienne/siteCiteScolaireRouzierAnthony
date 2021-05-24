<?php

include '../Modele/etablissement.php';
include_once "../Modele/article.php";

$_SESSION['ide'] = $_REQUEST['q'];

$etablissementChoisi=new Etablissement();
$etablissementChoisi->retrieve("IDE=".$_REQUEST['q']);
//$lesarticlesEtab = $etablissementChoisi->getLesArticles();
$article = new Article();
$lesarticlesEtab = $article->findByEtab($_REQUEST['q']);

echo "<H3>".$etablissementChoisi->getNomE()."</H3>";

?>

                
<table rules=rows cellpadding="10">

    <thead>
        <tr align="center" valign="middle">
            <th>Créateur article</th>
            <th>Titre article</th>    
            <th>Commentaire</th>
            <th>Date début</th>
            <th>Date fin</th>
        </tr>
        <div class="row">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <button type="button" onclick = "ajouterArticle();" class="btn btn-info add-new">
                    <i class="fa fa-plus"></i>
                    Ajouter Article
                </button>
            </div>
        </div>
    </thead>
    <tbody>

        <?php

            $nb = count($lesarticlesEtab);

            for($i=0; $i<$nb; $i++)
            {

        echo 
        '<tr id="'.$lesarticlesEtab[$i]->getida().'" align="center" valign="middle">';
        ?>
            <td id="utila">
            
                <?php
                    echo $lesarticlesEtab[$i]->getutila();
                ?>

            </td>
            <td id="titrea">
            
                <?php
                    echo $lesarticlesEtab[$i]->gettitrea();
                ?>

            </td>
            <td id="commentaire">
            
                <?php
                    echo $lesarticlesEtab[$i]->getcommentairea();
                ?>

            </td>
            <td id="datedebut">
            
                <?php
                    echo $lesarticlesEtab[$i]->getdatedebr();
                ?>

            </td>
            <td id="datefin">
            
                <?php
                    echo $lesarticlesEtab[$i]->getdatefinr();
                ?>

            </td>
            <td>
                <a class="add" title="Ajouter" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                <a class="edit" title="Modifier" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                
                <?php
                    echo "<a class='delete' title='Supprimer' data-toggle='modal' 
                    data-target='#confirm-delete' onclick=\"$('#maModale').html(
                    ".$lesarticlesEtab[$i]->getida()."
                    )\">
                    <i class='material-icons'>&#xE872;</i>
                    </a> ";
                ?>
            </td>
        </tr>

        <?php
            }
        ?>
        
    </tbody>
</table>


