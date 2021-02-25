<!-- Ceci est le controleur : on y regroupe nos fonctions -->

<?php

// Chargement des classes
require_once('model/ClientManager.php');

// Ce contrôleur récupère toutes les informations qu'il a besoin pour lire tous les clients avec des champs définis et les transmet au modèle : listeDesClients()
function listeClients()
{
    $postManager = new \Contratheque\Model\ClientManager(); // Création d'un objet
    $postClients = $postManager->readListeClients(); // Appel d'une fonction de cet objet

    require('view/frontend/listeClientsView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin lire le client avec tous ses champs sans exception et les transmet au modèle : detailClient($_GET['siret'])
function detailClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $postClient = $postManager->readDetailClient($_GET['siret_client']);

    require('view/frontend/detailClientView.php');
}

function formulaireModificationClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $postClient = $postManager->readDetailClient($_GET['siret_client']);

    require('view/frontend/modifierClientView.php');
}


// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le client et tous ses champs et les transmet au modèle : updateDetailClient
function modifierClient($siret_client, $denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact)
{
    $clientManager = new \Contratheque\Model\ClientManager();
  
    $postClient = $clientManager->updateDetailClient($_GET['siret_client'], $_POST['denomination_client'], $_POST['adresse1_siege'], $_POST['adresse2_siege'], $_POST['adresse3_siege'], $_POST['BP_CS_siege'], $_POST['code_postal_siege'], $_POST['ville_siege'], $_POST['pays_siege'], $_POST['site_internet_siege'], $_POST['email_siege'], $_POST['telephone_siege'], $_POST['champlibre_chorus'], $_POST['adresse1_fact'], $_POST['adresse2_fact'], $_POST['adresse3_fact'], $_POST['BP_CS_fact'], $_POST['code_postal_fact'], $_POST['ville_fact'], $_POST['pays_fact'], $_POST['email_fact'], $_POST['telephone_fact']);

    if ($postClient === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
}



