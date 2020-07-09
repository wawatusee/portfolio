<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?=$page?></title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body onload="draw();">
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
                <p>2 tutos sont demandés, dois-je placer chaque tuto dans un répertoire particulier? Je bloque pas pour l'instant, j'attend de voir les contraintes de chaque tuto selon son contenu.</p>
                <section >
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
                        <li>Dessiner?
                    </ol>
                    <h3>1-Qu'est ce que CANVAS?</h3>
                    <p>Dans le cadre de pages html, l'élément &lsaquo;canvas&rsaquo;est utilisé pour dessiner des formes à la volée grace à java-script.</p>
                    <h3>2-A quoi ça sert?</h3>
                    <p>La balise html &lsaquo;canvas&rsaquo; est un conteneur pour des formes ou dessins, le java-script permet d'y importer des formes pleines,ou juste leurs contours ou de les dessiner point à point.</p>
                    <h3>3-Comment le mettre en place?</h3>
                    <h4>Div html</h4>
                    <p>Le premier élément à mettre en place est votre balise &lsaquo;canvas&rsaquo;<br>
                    Créons dans le corps de notre page html une balise ‹canvas›, balise ouvrante et fermante. <br>
                    donnons à cette balise un attribut largeur(width="200"), une propriété hauteur(height="200") ainsi qu'un attribut id. <br>
                    </p>
                    <pre><code>&lsaquo;canvas id="espaceCanvas" width="200" height="200"&rsaquo;&lsaquo;/canvas&rsaquo;</code></pre>
                    <div id="comment">Le carré ci-dessous est votre balise canvas : <br>
                    </div><br>
                    <div class="renducode">
                        <canvas width="200" height="200"></canvas>
                    </div>
                    <h4>id et Script JS</h4>
                    <p>Java-script est nécessaire pour dessiner dans votre espace Canvas, <br>
                    Grace à l'id  ciblons avec java-script notre espace Canvas.</p>
                    <pre><code> var monEspaceCanvas = document.getElementById('espaceCanvas');</code></pre>
                    <p>Nous agirons dorénavant sur notre espace de dessin en utilisant la variable espaceCanvas. <br>
                    Pour dessiner nous allons vérifier si notre balise canvas est capable de recevoir de la 2D <i>if (monEspaceCanvas.getContext)</i> et une fois cette condition vérifiée, définir notre espace comme un espace "2D" <i>var monDessin = monEspaceCanvas.getContext('2d');</i></p>
                    <pre>
                        <code>
                        var monEspaceCanvas = document.getElementById('espaceCanvas');
                        if (monEspaceCanvas.getContext) {
                            var monDessin = monEspaceCanvas.getContext('2d');
                        }
                        </code>
                    </pre>
                    <h4>4-Dessiner</h4>
                    <p>Votre feuille vierge est prète à recevoir votre oeuvre : prenons notre crayon. <br>
                    Pour commencer à dessiner utilisons la méthode beginPath();</p>
                    <pre>
                        <code>
                        var monEspaceCanvas = document.getElementById('espaceCanvas');
                        if (monEspaceCanvas.getContext) {
                            var monDessin = monEspaceCanvas.getContext('2d');
                            monDessin.beginPath();
                        }
                        </code>
                    </pre>
                    <p>désignons les coordonnées du point de départ de notre dessin avec la méthode moveTo(x, y) qui prend 2 arguments(ici x et y) qui correspondent aux coordonnées de notre premier point dans notre espace canvas.
                    Par exemple monDessin.moveTo(25, 25), démarrera notre dessin à 25pixels du bord gauche et à 25pixels du haut de notre surface de dessin.</p>
                    <pre>
                        <code>
                        var monEspaceCanvas = document.getElementById('espaceCanvas');
                        if (monEspaceCanvas.getContext) {
                            var monDessin = monEspaceCanvas.getContext('2d');
                        monDessin.beginPath();
                        monDessin.beginPath();
                            monDessin.moveTo(25, 25);
                        }
                        </code>
                    </pre>
                    <p>Et enfin pour que qu'une ligne soit visible désignons les coordonnées d'un autre point qui permettra de créér notre première ligne avec la méthode lineTo(x,y).</p>
                    <pre>
                        <code>
                        var monEspaceCanvas = document.getElementById('espaceCanvas');
                        if (monEspaceCanvas.getContext) {
                            var monDessin = monEspaceCanvas.getContext('2d');
                        monDessin.beginPath();
                        monDessin.beginPath();
                            monDessin.moveTo(25, 25);
                            monDessin.lineTo(105, 25);

                        }
                        </code>
                    </pre>
                    <p>Nous dessinons  ainsi ligne à ligne comme si vous ne lachions jamais notre crayon. <br>
                        Quand toutes le lignes de notre dessin ont été écrites, nous cloturons notre dessin avec la méthode closePath(); <br>
                        Deux autres méthodes vont désigner notre visuel, la méthode stroke(); qui fera apparaitre une ligne passant par chacun des points définis avant dans le code et la méthode fill(); qui remplira notre forme.
                        Ou la méthode fill() qui remplira notre forme. Le code suivant produira un triangle rempli et un triangle fait de segment de droite.<br>
                    </p>
                    <pre>
                        <code>
                        var monEspaceCanvas = document.getElementById('espaceCanvas');
                        if (monEspaceCanvas.getContext) {
                            var monDessin = monEspaceCanvas.getContext('2d');

                            // Triangle plein
                            monDessin.beginPath();
                            monDessin.moveTo(25, 25);
                            monDessin.lineTo(105, 25);
                            monDessin.lineTo(25, 105);
                            monDessin.fill();

                            // Triangle filaire
                            monDessin.beginPath();
                            monDessin.moveTo(125, 125);
                            monDessin.lineTo(125, 45);
                            monDessin.lineTo(45, 125);
                            monDessin.closePath();
                            monDessin.stroke();
                        }
                        </code>
                    </pre>
                    <h4>RENDU</h4>
                    <canvas id="espaceCanvas" width="200" height="200"></canvas>
                    <P>PS :  Différents contextes et méthode peuvent être utilisés dans l'espace Canvas, pour les dessins en 2 dilensions, celui que nous venons d'employer : <br>
                    2D, pour les représentation en 3 dimensions : webgl et webgl2 et la reproduction d'image bitmab :ImageBitmapRendering. <br>
                    </P>
                </section>
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
    <script type="application/javascript">
    function draw() {
                        var monEspaceCanvas = document.getElementById('espaceCanvas');
                        if (monEspaceCanvas.getContext) {
                            var monDessin = monEspaceCanvas.getContext('2d');

                            // Triangle plein
                            monDessin.beginPath();
                            monDessin.moveTo(25, 25);
                            monDessin.lineTo(105, 25);
                            monDessin.lineTo(25, 105);
                            monDessin.fill();

                            // Triangle filaire
                            monDessin.beginPath();
                            monDessin.moveTo(125, 125);
                            monDessin.lineTo(125, 45);
                            monDessin.lineTo(45, 125);
                            monDessin.closePath();
                            monDessin.stroke();
                        }
                    }
    </script>
</body>

</html>