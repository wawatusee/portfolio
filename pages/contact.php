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
                <div>
                    <h1>Me Contacter</h1>
                    <form method="post">
                        <div>
                            <div>
                                <input type="text" name="txtNom"  placeholder="VOTRE NOM *" value="" />
                            </div>
                            <div>
                                <input type="text" name="txtPrenom"  placeholder="VOTRE PRENOM *" value="" />
                            </div>
                            <div>
                                <input type="text" name="txtMail"  placeholder="VOTRE MAIL *" value="" />
                            </div>
                            <div>
                                <input type="text" name="txtSujet"  placeholder="SUJET *" value="" />
                            </div>
                        </div>
                        <div>
                            <textarea name="txtMsg"  placeholder="VOTRE MESSAGE ... *" rows="9" cols="33"></textarea>
                        </div>
                        <div>
                            <button type="submit">ENVOYER </button>
                        </div>
                    </form>
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