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
                <p>La page de galerie présenterait des screenshot de mes différentes anciennes productions, accompagnées d'un commentaire. Forme simple pour pouvoir tester différentes css<br>
                Une div galerie, Une liste de lien, ds chaque lien, une vignette et un texte avec un display particulier pour le texte. Le modèle de wikipedia a la forme simple que je cherche pour la structure <br>
                Je vais tenter de l'intégrer, lien vers la page : <a href="https://fr.wikipedia.org/wiki/Aide:Galerie">Galerie wikipedia</a></p>
                <gallery>
                Fichier:p-galeries/img/Tomato.svg|Une légende.
                Fichier:Tomato.svg|Une légende.
                Fichier:Tomato.svg|Une légende.
                Fichier:Tomato.svg|Une légende avec un [[Wikipédia:Liens internes|lien]].
                Fichier:Tomato.svg|Une légende.
                Fichier:Tomato.svg|Une légende.
                </gallery>
                <p>Ou le modèle flex de try it yourself mais avec une interface en JSON comme ci-dessus, plutot que  écrit direct depuis le php : <a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_image_grid">Galerie Flex</a></p>
                <div class="gallery">
                    <img src="images/galeries/bxl-cloudyroof.jpg" alt="cloudyroof">
                    <img src="images/galeries/bxl-cloudy-roof-nb.jpg" alt="cloudy-roof-nb">
                    <img src="images/galeries/city-contrejour.jpg" alt="city-contrejour">
                    <img src="images/galeries/city-schaerbeek-01.jpg" alt="city-schaerbeek-01">
                    <img src="images/galeries/city-schaerbeek-02.jpg" alt="city-schaerbeek-02">
                    <img src="images/galeries/city-schaerbeek-03.jpg" alt="city-schaerbeek-03">
                    <img src="images/galeries/city-schaerbeek-coucher-soleil.jpg" alt="city-schaerbeek-coucher-soleil">
                    <img src="images/galeries/financial-tour-nuit.jpg" alt="financial-tour-nuit">
                    <img src="images/galeries/ghotam.jpg" alt="ghotam">
                    <img src="images/galeries/quartierAffairecontrejournb.jpg" alt="quartierAffairecontrejournb">
                    <img src="images/galeries/quartieraffaire-nb.jpg" alt="quartieraffaire-nb">
                    <img src="images/galeries/saintemarie.jpg" alt="saintemarie">
                    <img src="images/galeries/saintemarie-nb.jpg" alt="saintemarie-nb">
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