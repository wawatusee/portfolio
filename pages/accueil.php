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
                <p>Dans la page de lien, sont présentées les support de cours, rangées par thématiques, triées par dates (videos, pdf, repertoire Git-hub, etc)</p>
                <p>La page de galerie, dans le cadre d'un portfolio standart, présenterait des illustrations de mes différentes productions, ces productions étant plutôt maigres pour l'instant, je rangerai les différents modèles/modules de galeries que j'ambitionne d'utiliser par la suite. Ce n'est pas  le contenu, que j'y présenterai mais plutot le contenant.</p>
            </main>
            <!-- BARRE LATERALE -->
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
        </div>
        <!-- PIED DE PAGE -->
        <footer>
            <p>Copyright &copy; 2020 - Kieran-Labarrere</p>
        </footer>
    </div>
</body>

</html>