<?php 
    echo "creautil";
    
    include_once("Modele/etablissement.php");
    
    include_once("Modele/associe.php");

    $lEtab = new etablissement();

    $lesEtab = array();

    $lesEtab = $lEtab->findAll();

    $etat = "creautil";

?>