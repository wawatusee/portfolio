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
                    <li>
                        <a href="#tutoriel1">Tutoriel1-CANVAS</a>
                    </li>
                </ul>
            </nav>
            <!-- CONTENU PRINCIPAL -->
            <main>
                <p>2 tutos sont demandés, dois-je placer chaque tuto dans un répertoire particulier? Je bloque pas pour l'instant, j'attend de voir les contraintes de chaque tuto selon son contenu.</p>
                <section>
                    <h2 id="tutoriel1">Tutoriel1-CANVAS</h2>
                    <ol>
                        <li>Qu'est ce que CANVAS?</li>
                        <li>A quoi ça sert?</li>
                        <li>Comment le mettre en place, l'utiliser?
                            <ul>
                                <li>Div html</li>
                                <li>id et Script JS</li>
                            </ul>
                        </li>
                    </ol>
                    <h3>Qu'est ce que CANVAS?</h3>
                    <p>Dans le cadre de pages html, l'élément &lsaquo;canvas&rsaquo;est utilisé pour dessiner des formes à la volée grace à java-script.</p>
                    <h3>A quoi ça sert?</h3>
                    <p>La balise html &lsaquo;canvas&rsaquo; est un conteneur pour des formes ou dessins, le java-script permet d'y importer des formes pleines,ou juste leurs contours ou de les dessiner point à point.</p>
                    <h3>Comment le mettre en place?</h3>
                    <p>Le premier élément à mettre en place est votre balise &lsaquo;canvas&rsaquo; <br>
                    Une balise ouvrante, une balise fermante canvas <br>
                    à laquelle nous donnons un attribut largeur(width="200"), une propriété hauteur(height="200")<br>
                    </p>
                    <code>&lsaquo;canvas width="200" height="200"&rsaquo;&lsaquo;/canvas&rsaquo;</code>
                    <div id="comment">Le carré ci-dessous est votre balise canvas : <br>
                    <br>
                    </div>
                    <div class="renducode">
                        <canvas width="200" height="200"></canvas>
                    </div>
                    <p>Le premier élément à mettre en place est votre balise &lsaquo;canvas&rsaquo;</p>
                    <code>&lsaquo;canvas width="200" height="200"&rsaquo;&lsaquo;/canvas&rsaquo;</code>
                    <div id="comment">Le carré ci-dessous est votre balise canvas : <br>
                    Une balise ouvrante, une balise fermante canvas <br>
                    avec une propriété largeur(width="200"), <br>
                    une propriété hauteur(height="200")<br>
                    et un id (id="CanvasEnHtml") qui va nous permettre de cibler le contenu de ce carré grace au Java-script. <br>
                    </div>
                    <div class="renducode">
                        <canvas width="200" height="200"></canvas>
                    </div>
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