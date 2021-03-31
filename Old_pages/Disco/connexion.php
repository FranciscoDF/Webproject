<?php setcookie('identifiant',$ident) ?>
<?php setcookie('mdp',$mdp) ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="a propos.css">
        <title>Connexion à votre compte CESI'NDEED</title>
    </head>

    <body>
        <main>
                    
            <form method= "POST" action="page_connexion.php">
                <section style="text-align: center;">
                    <h2> Connexion:</h2>
                    <fieldset style=" padding: 6px; margin-bottom: 40%; margin-left: 35%; margin-right: 35%; ">
                        <h5>Identitiant :</h5>
                        <input id='id' type="text" name="id" required />
                        <h5>Mots de passe :</h5>
                        <input id='mdp' type="password" name="mdp" required/>
                        <br>
                        <br>
                        <input id="garder" type="checkbox" name="garder"><label for="garder"> rester connecté</label>
                        <br>
                        <br>
                        <input id='submit' type="submit" value="Valider">
                    </fieldset>
                    <?php
                    /*if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    if(isset($_GET['erreur'])) {
                        $err = $_GET['erreur'];
                        if($err==1)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }*/
                    if(isset($_COOKIE['identifiant'] && $_COOKIE['mdp']))
                    {
                        echo "ident et mdp c'est okay";
                    }
                    else
                    {
                        echo "ident et mdp c'est okay";
                    }
                    ?>
                </section>
            </form>

        </main>
    </body>
</html>