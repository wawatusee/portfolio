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
                    <li>A créer une liste des sous rubriques de la page principale, par exemple pour la page tuto, la liste des tutos.<br>
                Ne nous inquiétons pas pour l'instant de la largeur de cette section, au final son contenu ne devrait pas excéder la largeur d'un mot cliquable.<br>
                Pour la version mobile peut-être un menu repliable à gauche, à voir.
                    </li>
                </ul>
            </nav>
            <!-- CONTENU PRINCIPAL -->
            <main>
                <p>2 tutos sont demandés, dois-je placer chaque tuto dans un répertoire particulier? Je bloque pas pour l'instant, j'attend de voir les contraintes de chaque tuto selon son contenu.</p>
                <section>
                <h2>Tutoriel1-CANVAS</h2>
                <ol>
                    <li>Qu'est ce que CANVAS?</li>
                    <li>A quoi ça sert?</li>
                    <li>Comment le mettre en place</li>
                    <li>Comment le mettre en place?</li>
                    <li>Comment l'utiliser?
                        <ul>Création
                            <li>Page html</li>
                            <li>Div dédiée à CANVAS(id)</li>
                            <li>Script JS</li>
                        </ul>
                    </li>
                </ol>
                <h3>Qu'est ce que CANVAS?</h3>
                <p>Dans le cadre de pages html, l'élément &lsaquo;canvas&rsaquo;est utilisé pour dessiner des formes à la volée grace à java-script.</p>
                <h3>A quoi ça sert?</h3>
                <p>La balise html &lsaquo;canvas&rsaquo; n'est qu'un conteneur pour vos formes ou dessins, c'est le java-script qui va vous permettre de créer les formes contenues.</p>
                <h3>Comment le mettre en place?</h3>
                <p>Le premier élément à mettre en place est votre balise &lsaquo;canvas&rsaquo;</p>
                <code>'<canvas id="myCanvas" width="200" height="100"></canvas>'</code>
                </section>
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