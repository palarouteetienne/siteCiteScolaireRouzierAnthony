<?php
// Fonction de suppression des fichiers ressources dans le dossier img.
function suppression($dossier,$nomFichier_choisi)
{
    // On ouvre le dossier.
    $repertoire = opendir($dossier);
 
    // On lance notre boucle qui lira les fichiers un par un.
    while(false !== ($fichier = readdir($repertoire)))
    {
        // On met le chemin du fichier dans une seule variable
        $chemin = $dossier."/".$fichier;
    
        $infos = pathinfo($chemin);
        
        if($fichier != "." AND $fichier != ".." AND !is_dir($fichier) AND $fichier == $nomFichier_choisi)
        {
            unlink($chemin);
        }
    }
    closedir($repertoire); // On ferme le dossier
    echo "<BR/> Fin suppression des fichiers sur le serveur";
}
?>