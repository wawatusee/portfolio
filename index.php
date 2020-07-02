<?php
//Controleur frontal, l'accès aux pages de ce site se font systématiquement par ici

// On vérifie si la variable page est initialisée
//Si elle n'existe pas
if(!isset($_GET["page"])){
    //par défaut appelons la page d'accueil
    $page="accueil";
    include "pages/accueil.php";
}
// si la variable page est initialisée, intégrons la page correspondante à celle-ci
else {

    $page = $_GET["page"];

    switch ($page) {
        case "liens":
            include "pages/liens.php";
            break;
        case "galerie":
            include "pages/galerie.php";
            break;
        case "tuto":
            include "pages/tuto.php";
            break;
        case "contact":
            include "pages/contact.php";
            break;
        default:
            include "pages/accueil.php";
    }
}