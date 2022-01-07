<center>
    <?php
        if($reussi == false)
        {
            echo "Erreur en associant un établissement à un utilisateur dans la base de données.";
        }
        else
        {
            echo "Utilisateur correctement ajouté à la base.";
        }
    ?>
    <BR/>
    <a href='index.php?action=init' style='color: grey;font-size: 20px;'>Retour accueil</a>
</center>