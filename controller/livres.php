<!-- Ceci est le controleur : on y regroupe nos fonctions -->

<?php

// Chargement des classes
require_once('model/LivresManager.php');

function listLivres()
{
    $postManager = new \PouzyBookWeb\model\LivresManager(); // Création d'un objet
    $posts = $postManager->listeLivres(); // Appel d'une fonction de cet objet

    require('view/frontend/listLivres.php');
}

function detailLivre($livreId)
{
    $postManager = new \PouzyBookWeb\model\LivresManager(); // Création d'un objet
    $postLivre = $postManager->detailLivre($livreId); // Appel d'une fonction de cet objet

    require('view/frontend/detailLivre.php');
}

