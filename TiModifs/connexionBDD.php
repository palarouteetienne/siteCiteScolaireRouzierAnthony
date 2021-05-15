<?php

function getBDD()
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

?>