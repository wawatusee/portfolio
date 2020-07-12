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
                <p></p>
                <p>J'ai choisi dans un premier temps de traiter la galerie en prenant pour modèle le "try it yourself" de Flex <a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_image_grid">Galerie Flex</a></p>
                <p></p>
                <div class="gallery">
                    <img src="/images/galeries/bxl/thumbs/bxl-cloudyroof.jpg" alt="cloudyroof">
                    <img src="images/galeries/bxl/thumbs/bxl-cloudy-roof-nb.jpg" alt="cloudy-roof-nb">
                    <img src="images/galeries/bxl/thumbs/city-contrejour.jpg" alt="city-contrejour">
                    <img src="images/galeries/bxl/thumbs/city-schaerbeek-01.jpg" alt="city-schaerbeek-01">
                    <img src="images/galeries/bxl/thumbs/city-schaerbeek-02.jpg" alt="city-schaerbeek-02">
                    <img src="images/galeries/bxl/thumbs/city-schaerbeek-03.jpg" alt="city-schaerbeek-03">
                    <img src="images/galeries/bxl/thumbs/city-schaerbeek-coucher-soleil.jpg" alt="city-schaerbeek-coucher-soleil">
                    <img src="images/galeries/bxl/thumbs/financial-tour-nuit.jpg" alt="financial-tour-nuit">
                    <img src="images/galeries/bxl/thumbs/ghotam.jpg" alt="ghotam">
                    <img src="images/galeries/bxl/thumbs/quartierAffairecontrejournb.jpg" alt="quartierAffairecontrejournb">
                    <img src="images/galeries/bxl/thumbs/quartieraffaire-nb.jpg" alt="quartieraffaire-nb">
                    <img src="images/galeries/bxl/thumbs/saintemarie.jpg" alt="saintemarie">
                    <img src="images/galeries/bxl/thumbs/saintemarie-nb.jpg" alt="saintemarie-nb">
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