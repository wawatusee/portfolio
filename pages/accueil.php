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
            <p><?=$page?></p>
        </header>
        <!-- MENUS DE NAVIGATION -->
        <?php include "menu.php" ?>
        <div class="contenu">
            <nav class="menusecondaire">
                <Hn>Sommaire</Hn>
                <ul>
                    <li><a href="#">Principes</a></li>
                    <li><a href="#">Exemple</a></li>
                </ul>
            </nav>
            <!-- CONTENU PRINCIPAL -->
            <main>
                <h1><?=$page?></h1>
                <h2>Site portfolio</h2>
                <p>En cours d'apprentissage au CF2M, à défaut de vitrine complète, ce site consiste en une présentation d'établi, une mise en valeur de boite à outil.</p>
                <p>Dans la page de lien, sont présentés les matières et techniques étudiées, rangées par thématiques, triées par date de cours et alimentées des différents support de cours fournis : videos, pdf, repertoire Git-hub, etc</p>
                <p>La page de galerie, dans le cadre d'un portfolio standart, présenterait des illustrations de différentes productions, de la boite à outil citée ci-dessus, je rangerai les différents modèles/modules de galeries que j'ambitionne d'utiliser pae la suite. Ce n'est pas  le contenu, que j'y présenterai mais plutot le contenant.</p>
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