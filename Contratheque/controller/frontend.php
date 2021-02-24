<!-- Ceci est le controleur : on y regroupe nos fonctions -->

<?php

// Chargement des classes
require_once('model/ClientManager.php');
require_once('model/CommentManager.php');

// Ce contrôleur récupère toutes les informations qu'il a besoin pour lire tous les clients avec des champs définis et les transmet au modèle : listeDesClients()
function readClients()
{
    $postManager = new \Contratheque\Model\ClientManager(); // Création d'un objet
    $posts = $postManager->listeDesClients(); // Appel d'une fonction de cet objet

    require('view/frontend/listClientsView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin lire le client avec tous ses champs sans exception et les transmet au modèle : detailClient($_GET['siret'])
function readDetailClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $post = $postManager->detailClient($_GET['siret']);

    require('view/frontend/detailClientView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin lire le client (en fonction de son siret $_GET['siret']) et les transmet au modèle : detailClient($_GET['siret'])
function formulaireUpdateClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $post = $postManager->detailClient($_GET['siret']);

    require('view/frontend/editClientView.php');
}


// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le client et tous ses champs et les transmet au modèle : UpdateClient
function updateClient($siret_client, $denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact)
{
    $commentManager = new \Contratheque\Model\ClientManager();
  
    $newComment = $commentManager->updateDetailClient($siret_client, $denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact);
  
    if ($newComment === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
        echo 'commentaire : ' . $_POST['comment'];
        header('Location: index.php?action=viewComment&siret=' . $siret_client);
    }
}



