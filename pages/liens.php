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
                <p>Liens vers les cours donnés, au CF2M depuis le début de l'année à la classe de WEB.</p>
                <p>Rangées par matières et par cours.</p>
                <p>Voici les support de cours, triées par dates (videos, pdf, repertoire Git-hub, etc)</p>
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