<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?=$page?></title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body >
    <div class="grid-container">
            <!-- HEADER -->
            <header>
                <?php include "files/header.php" ?>
                <!-- MAIN NAV-->
                <menu>
                 <?php include "files/menu.php" ?>
                </menu>
            </header>
            <!-- MAIN CONTENT -->
            <div class="menuSecondaire">
                <h3><?=$page?></h3>
                <?php include "pages/menu-$page.php" ?>
            </div>
            <main>
                <p>En cours d'apprentissage au CF2M, à défaut de vitrine complète, ce site consiste en une présentation d'établi, une mise en valeur de boite à outils.</p>
                <p>Dans la page de lien, sont présentées les support de cours, rangées par thématiques, triées par dates (videos, pdf, repertoire Git-hub, etc)</p>
                <p>La page de galerie, dans le cadre d'un portfolio standart, présenterait des illustrations de mes différentes productions, ces productions étant plutôt maigres pour l'instant, je rangerai les différents modèles/modules de galeries que j'ambitionne d'utiliser par la suite. Ce n'est pas  le contenu, que j'y présenterai mais plutot le contenant.</p>
            </main>
            <!-- ASIDE -->
            <aside>
                <?php include "files/aside.php" ?>
            </aside>
            <!-- FOOTER -->
            <footer>
                 <?php include "files/footer.php"?>
            </footer>
    </div>
</body>
</html>