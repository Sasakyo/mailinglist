<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>PTSD - Projet Top Secret Démentiel</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="css/layouts/pure-min.css">

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" href="css/layouts/grids-responsive-min.css">
      
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/layouts/font-awesome.css">

    <link rel="stylesheet" href="css/layouts/marketing.css">
    
</head>

<body>

    <div class="header">
        <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
            <a class="pure-menu-heading" href="">PTSD</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected">Accueil</li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Admin</a></li>
            </ul>
        </div>
    </div>

    <div class="splash-container">
        <div class="splash">
            <h1 class="splash-head">Projet Top Secret Démentiel</h1>
            <p class="splash-subhead">
                Bientôt, tu auras l'honneur de savoir de quoi il s'agit... si tu t'inscris à la mailing list.
            </p>
            <p>
                <a href="#inscription" class="pure-button pure-button-primary">Je veux être informé !</a>
            </p>
        </div>
    </div>

    <div class="content-wrapper">

        <div class="ribbon l-box-lrg pure-g">
            <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
                <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
            </div>
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

                <h2 class="content-head content-head-ribbon">Vraiment, magne-toi le cul.</h2>

                <p>Pourquoi est-ce tu essaies de trouver une information sur ce site alors que le projet s'appelle PTSD
                    (Projet Top Secret Démentiel) ? Genre tu as du mal à comprendre quelque chose dans la partie
                   "TOP SECRET". TOP SECRET PUTAIN. ALLEZ INSCRIS-TOI AUX MAILS MAINTENANT.</p>
            </div>
        </div>

        <div class="content">
            <h2 class="content-head is-center">En gros, pour s'inscrire c'est le bon endroit.</h2>

            <div class="pure-g">
                <div class="l-box-lrg pure-u-1 pure-u-md-2-5" id="inscription">
                    <form class="pure-form pure-form-stacked" method="post">
                        <fieldset>
                            <?php require('inscription.php'); ?>
                            <label for="mail">Ton mail, ici.</label>
                            <input id="mail" type="email" name="mail" placeholder="mail@pasdinspi.com">
                            <p class ="errors"><?php
                            if($errors){
                              echo $errors['mailvide'];  
                            } 
                             
                            ?></p>
                            <input id="prenom" name="prenom" type="text" placeholder="Ton prénom">
                            <button type="submit" class="pure-button">S'inscrire</button>
                            
                        </fieldset>
                    </form>
                </div>

                <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                    <h4>Exclusivité</h4>
                    <p>Oui, oui, oui ! Tu te rends compte ? Tu seras parmi les premières personnes
                       découvrant en EXCLUSIVITE mon nouveau produit.
                    </p>

                    <h4>Plus d'informations ?</h4>
                    <p>Non mais, tu y as vraiment cru ?</p>
                </div>
            </div>

        </div>

        <div class="footer l-box is-center">
            Basé sur un template trouvé sur <a href="http://purecss.io/">purecss.io</a>.
        </div>

    </div>

</body>
</html>
