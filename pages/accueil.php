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
                
                <menu>
                 <?php include "files/menu.php" ?>
                </menu>
            </header>
            <!-- MAIN NAV-->

                <!-- MAIN CONTENT -->
            <div class="menuSecondaire">
                <h3>Portfolio</h3>
                <div>Rubrique1</div>
                <div>Rubrique</div>
            </div>
            <main>
                <p>En cours d'apprentissage au CF2M, à défaut de vitrine complète, ce site consiste en une présentation d'établi, une mise en valeur de boite à outils.</p>
                <p>Dans la page de lien, sont présentées les support de cours, rangées par thématiques, triées par dates (videos, pdf, repertoire Git-hub, etc)</p>
                <p>La page de galerie, dans le cadre d'un portfolio standart, présenterait des illustrations de mes différentes productions, ces productions étant plutôt maigres pour l'instant, je rangerai les différents modèles/modules de galeries que j'ambitionne d'utiliser par la suite. Ce n'est pas  le contenu, que j'y présenterai mais plutot le contenant.</p>
            </main>
            <!-- ASIDE -->
            <aside>
                <h2>News</h2>
                <article>
                    <h3>Titre</h3>
                    <p>Contenu</p>
                </article>
                <article>
                    <h3>Titre</h3>
                    <p>Contenu</p>
                </article>
            </aside>
            <!-- FOOTER -->
            <footer>
                 <?php include "files/footer.php"?>
            </footer>
    </div>
</body>

</html>