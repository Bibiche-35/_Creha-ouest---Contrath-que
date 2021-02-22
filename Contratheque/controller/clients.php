<!-- Ceci est le controleur : on y regroupe nos fonctions -->

<?php

// Chargement des classes
require_once('model/ClientsManager.php');

function listeClients()
{
    $postManager = new \Contratheque\model\ClientsManager(); // Création d'un objet
    $postsClients = $postManager->listeClients(); // Appel d'une fonction de cet objet

    require('view/frontend/listeClients.php');
}

function detailClient($clientId)
{
    $postManager = new \Contratheque\Model\ClientsManager(); // Création d'un objet
    $postClient = $postManager->detailClient($clientId); // Appel d'une fonction de cet objet

    require('view/frontend/detailClient.php');
}

