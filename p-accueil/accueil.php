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
                </ul>
            </nav>
            <!-- CONTENU PRINCIPAL -->
            <main>
                <p>En cours d'apprentissage au CF2M, à défaut de vitrine complète, ce site consiste en une présentation d'établi, une mise en valeur de boite à outils.</p>
                <p>Dans la page de lien, seront présentés les support de cours, rangées par thématiques, triées par dates (videos, pdf, repertoire Git-hub, etc)</p>
                <p>La page de galerie présenterait des screenshot de mes différentes anciennes productions, accompagnées d'un commentaire.</p>
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