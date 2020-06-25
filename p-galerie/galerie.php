<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?=$page?></title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="global">
        <!-- ENTETE -->
        <header>
            <p>WEB-portfolio kieran labarrere-<?=$page?></p>
        <!-- MENUS DE NAVIGATION -->
        <?php include "files/menu.php" ?>
        </header>
        <div class="contenu">
            <nav class="menusecondaire">
                <Hn>Portfolio</Hn>
                <ul>
                <!--ICI une liste de liens des rubriques de la page-->
                    <li>A créer une liste des sous rubriques de la page principale, par exemple pour la page galerie, pourrait être une liste des différentes galeries contenues.<br>
                Ne nous inquiétons pas pour l'instant de la largeur de cette section, au final son contenu ne devrait pas excéder la largeur d'un mot cliquable.<br>
                Pour la version mobile peut-être un menu repliable à gauche, à voir.
                    </li>
                </ul>
            </nav>
            <!-- CONTENU PRINCIPAL -->
            <main>
                <p>La page de galerie présenterait des screenshot de mes différentes anciennes productions, accompagnées d'un commentaire. Forme simple pour pouvoir tester différentes css<br>
                Une div galerie, Une liste de lien, ds chaque lien, une vignette et un texte avec un display particulier pour le texte.</p>
            </main>
            <!-- BARRE LATERALE -->
            <aside>
                <?php include "files/aside.php" ?>
            </aside>
        </div>
        <!-- PIED DE PAGE -->
        <?php include "files/footer.php"?>
    </div>
</body>

</html>