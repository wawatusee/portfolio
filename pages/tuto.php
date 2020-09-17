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
                <section >
                    <article>
                        <h2 id="tutoriel1">Tutoriel1-CANVAS</h2>
                        <ol>
                            <li>Qu'est-ce que CANVAS?</li>
                            <li>À quoi ça sert?</li>
                            <li>Comment le mettre en place, l'utiliser?
                                <ul>
                                    <li>Div html</li>
                                    <li>id et Script JS</li>
                                </ul>
                            
                            <li>Dessiner?</li>
                        </ol>
                        <h3>1-Qu'est-ce que CANVAS?</h3>
                        <p>Dans le cadre de pages html, l'élément &lsaquo;canvas&rsaquo; est utilisé pour dessiner des formes à la volée grâce à java-script.</p>
                        <h3>2-A quoi ça sert?</h3>
                        <p>La balise html &lsaquo;canvas&rsaquo; est un conteneur pour des formes ou dessins, le java-script permet d'y importer des formes pleines, ou juste leurs contours ou de les dessiner point à point.</p>
                        <h3>3-Comment le mettre en place?</h3>
                        <h4>Div html</h4>
                        <p>Le premier élément à mettre en place est votre balise &lsaquo;canvas&rsaquo;<br>
                        Créons dans le corps de notre page html une balise ‹canvas›, balise ouvrante et fermante. <br>
                        Donnons à cette balise un attribut largeur (width="200"), une propriété hauteur (height="200") ainsi qu'un attribut id. <br>
                        </p>
                        <pre><code>&lsaquo;canvas id="espaceCanvas" width="200" height="200"&rsaquo;&lsaquo;/canvas&rsaquo;</code></pre>
                        <div id="comment">Le carré ci-dessous est votre balise canvas : <br>
                        </div><br>
                        <div class="renducode">
                            <canvas width="200" height="200"></canvas>
                        </div>
                        <h4>id et Script JS</h4>
                        <p>Java-script est nécessaire pour dessiner dans votre espace canvas, <br>
                        Grâce à l'id  ciblons avec java-script notre espace canvas.</p>
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
                        <p>Votre feuille vierge est prête à recevoir votre oeuvre : prenons notre crayon. <br>
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
                        <p>Désignons les coordonnées du point de départ de notre dessin avec la méthode moveTo(x, y) qui prend 2 arguments (ici x et y) qui correspondent aux coordonnées de notre premier point dans notre espace canvas.
                        Par exemple monDessin.moveTo(25, 25) démarrera notre dessin à 25 pixels du bord gauche et à 25 pixels du haut de notre surface de dessin.</p>
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
                        <p>Et enfin pour qu'une ligne soit visible désignons les coordonnées d'un autre point qui permettra de créer notre première ligne avec la méthode lineTo(x,y).</p>
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
                            Quand toutes les lignes de notre dessin ont été écrites, nous clôturons notre dessin avec la méthode closePath(); <br>
                            Deux autres méthodes vont désigner notre visuel, la méthode stroke() qui fera apparaitre une ligne passant par chacun des points définis avant dans le code et la méthode fill() qui remplira notre forme.
                             Le code suivant produira un triangle rempli et un triangle fait de segments de droites.<br>
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
                    </article>
                    <hr>
                    <article>
                        <h2 id="tutoriel2">Tutoriel2-LES SPRITES</h2>
                        <ol>
                            <li>Qu'est-ce qu'un Sprite?</li>
                            <li>A quoi sert un Sprite?</li>
                            <li>Comment le mettre en place, l'utiliser?
                                <ul>
                                    <li>Créer le sprite</li>
                                    <li>Mise en place html id et CSS</li>
                                </ul>
                            </li>
                            <li>Dessiner?</li>
                        </ol>

                        <h3>1-Qu'est-ce qu'un Sprite</h3>
                        <blockquote>
                            <p> <b>SPRITE</b> : Il s'agit à l'origine d'une créature du petit peuple que l'on traduit en général par lutin. Le terme vient du latin spiritus (esprit), et se trouve aussi sous la forme spright et spriggan.<br>
                                <small><a href="https://fr.wikipedia.org/wiki/Sprite" target="_blank" rel="noopener noreferrer">Wiki-sprite </a><cite>https://fr.wikipedia.org/wiki/Sprite</cite></small>
                            </p>
                        </blockquote>
                        <p>Le Sprite dont je vais vous donner le mode d'emploi est plus une enveloppe que le lutin qui l'habite.</p>
                        <p>Une image <i> sprite</i> est une série d'images contenues dans une seule. <br>
                        <h3>2-À quoi sert un Sprite</h3>
                        Une page web contenant de nombreuses images va solliciter plusieurs appels à des serveurs pour charger toutes les images nécessaires alors qu'en utilisant une seule image sprite composée de l'ensemble des images, nous réduisons le nombre de requêtes et sauvons ainsi de la bande passante.</p>
                        <p>Aussi au lieu d'utiliser cette série d'images : <img src="images/tuto-sprite/twitter.png" alt="">|<img src="images/tuto-sprite/whatsapp.png" alt="">|<img src="images/tuto-sprite/deezer.png" alt="">|<img src="images/tuto-sprite/instagram.png" alt="">|<img src="images/tuto-sprite/deezer.png" alt="">|<img src="images/tuto-sprite/deezer.png" alt="">|<img src="images/tuto-sprite/deezer.png" alt="">|<br>
                        <p>Utilisons cette unique image : </p><img src="images/tuto-sprite/spritesheet.png" alt="exemple de sprite"></p>
                        <h3>3-Mettre en place un Sprite</h3>
                        <h4>Créer l'image</h4>
                        <p>Beaucoup moyens d'édition d'images peuvent être utilisés pour créer un Sprite. L'exemple suivant concentrera sur un Sprite les divers logos de réseaux sociaux que j'utiliserai comme liens vers les dits réseaux sociaux. Pour créer ce Sprite, j'ai trouvé un site dédié sur lequel j'ai téléchargé chaque logo, <a href="https://www.pngegg.com/fr" target="_blank" rel="noopener noreferrer"><img src="images/tuto-sprite/logo_png-egg.png" alt="logo pngegg"> pngegg.com</a>. </p>
                        <p>Une fois tous les logos réunis dans un dossier, nous allons les réunir sur un seul fichier. </p>
                        <p>Tous les moyens sont bons pour réunir toutes vos images en un seul sprite, j'ai trouvé celui-ci qui fait le job : <a href="https://codeshack.io/images-sprite-sheet-generator/" target="_blank" rel="noopener noreferrer">CodeShack</a>. Quel que soit le moyen choisi, nous devons avoir le focus sur les éléments qui nous permettront d'en faire un bon usage, à savoir pour chaque image:</p>
                        <p>
                            <ul>
                                <li>La taille doit être cohérente d'une image à l'autre</li>
                                <li>Le fond de l'image ne doit pas nuire à l'esthétique de l'ensemble du site.</li>
                                <li>Selon le cadre où ces images seront utilisées, choisir les transparences.</li>
                            </ul>
                        </p>
                    </article>
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