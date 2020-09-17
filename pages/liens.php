<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?=$page?></title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
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
                <p>Liens vers les cours donnés au CF2M depuis le début de l'année à la classe de WEB.</p>
                <p>Rangés par matières et par cours.</p>
                <p>Voici les supports de cours, triés par dates (vidéos, pdf, répertoire Git-hub, etc.)</p>
                <div class="liensCours">
                    <div class="cours">
                        <a href="https://youtu.be/m7Bfezl90rA">Cours Conception Bases de données du 02-04-2020</a>
                        <ul>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/mysql-workbench-community-8.0.19-winx64.msi">App-worbench</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/pngConceptionDB_modelisation_5_A.png">Img-conceptio-modelisation-5a</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/pngConceptionDB_modelisation_5_B.png">Img-conceptio-modelisation-5b</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/pngConceptionDB_modelisation_5_C.png">Img-conceptio-modelisation-5c</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/pngConceptionDB_modelisation_5_D.png">Img-conceptio-modelisation-5d</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/workbench.pdf">Pdf doc-Worbench-mode-d-emploi</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/ex1_bibliotheque/Exercice1.pdf">pdf-Exercice1</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/ex1_bibliotheque/schemaExercice1_1.png">img-exercice_1-1</a>
                            </li>
                            <li>
                                <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/ex1_bibliotheque/schemaExercice1_2.png">img-exercice_1-2</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cours">
                        
                            <a class="coursvideo" href="https://youtu.be/aUe39XtWXu8">Cours du 8/4/2020 AM - Pierre - Conception de bases de données</a>
                            <ul>
                                <li>
                                    <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/ex1_bibliotheque/Exercice1.pdf">pdf-Exercice1</a>
                                </li>
                                <li>
                                    <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/ex1_bibliotheque/Exercice1_v2.pdf">pdf-Exercice1-v2</a>
                                </li>
                                <li>
                                    <a href="http://partage.webdev-cf2m.be/WEB/DB-SQL/ex1_bibliotheque/ex1_bibliotheque.mwb">mwb-Modèle worbench-bibliotheque</a>
                                </li>
                            </ul>
                    </div>    
                </div>
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