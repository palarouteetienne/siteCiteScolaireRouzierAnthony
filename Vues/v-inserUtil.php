<center>
    <?php
        if(!$uneAsso->create())
        {
            echo "Erreur en associant un établissement à un utilisateur dans la base de données.";
        }
        else
        {
            echo "Utilisateur correctement ajouté à la base.";
        }
    ?>
    <BR/>
    <a href='index.php?action=init' style='color: grey;'>Retour accueil</a>
</center>