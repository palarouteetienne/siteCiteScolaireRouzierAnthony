<?php

function getBDD()
<<<<<<< HEAD
{    
    try {
        //  On se connecte à mysql
        $connStr = new PDO('mysql:host=localhost;dbname=citescolaire;charset=utf8','root','root');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    return $connStr;
}
=======
{
    // Identifiant
    $id = 'root';
    // Mot de passe
    $mdp = '';
    // Nom de la BDD
    $bdd = 'citescolaire';
    // Adresse du serveur
    $host = 'localhost';

    $conBDD = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$id,$mdp,
    array (
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true
    ));

    return $conBDD;
}

/*try {
    //  On se connecte à mysql
    $connStr = new PDO('mysql:host=localhost;dbname=citescolaire;charset=utf8', 'root', '');
}
catch
(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}*/
>>>>>>> 3c2182c71c5f87abf9365c47696c8da223497f83

?>