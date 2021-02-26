<!-- Ceci est le controleur : on y regroupe nos fonctions -->

<?php

// Chargement des classes
require_once('model/ClientManager.php');
require_once('model/DepartementManager.php');
require_once('model/SuiviClientManager.php');
require_once('model/ConventionManager.php');
require_once('model/SuiviConventionManager.php');
require_once('model/DeontologieManager.php');
require_once('model/SuiviDeontologieManager.php');

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
    $postManager = new \Contratheque\model\ClientManager();
    $departementManager = new \Contratheque\model\DepartementManager();
    $suiviClientManager = new \Contratheque\model\SuiviClientManager();
    $conventionClient = new \Contratheque\model\ConventionManager();
    $suiviConventionClient = new \Contratheque\model\SuiviConventionManager();
    $deontologieClient = new \Contratheque\model\DeontologieManager();
    $suiviDeontologieClient = new \Contratheque\model\SuiviDeontologieManager();

    
    $postClient = $postManager->readDetailClient($_GET['siret_client']);
    $postDepartements = $departementManager->readDepartements($_GET['siret_client']);
    $postSuiviClient = $suiviClientManager->readDernierSuiviClient($_GET['siret_client']);
    $postConventionClient = $conventionClient->readDetailConvention($_GET['siret_client']);
    $postSuiviConvention = $suiviConventionClient->readDernierSuiviConvention($_GET['siret_client']);
    $postDeontologieClient = $deontologieClient->readDetailDeontologie($_GET['siret_client']);
    $postSuiviDeontologie = $suiviDeontologieClient->readDernierSuiviDeontologie($_GET['siret_client']);

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

// Ce contrôleur récupère toutes les informations qu'il a besoin pour afficher l'historique des modifications client et les transmet au modèle : detailClient($_GET['siret'])
function listeSuiviClient()
{

    $historiqueSuiviClientManager = new \Contratheque\model\SuiviClientManager();
    
    $historiqueSuiviClient = $historiqueSuiviClientManager->readHistoriqueSuiviClient($_GET['siret_client']);

    require('view/frontend/historiqueSuiviClientView.php');
}

function formulaireModificationConvention()
{
    $postManager = new \Contratheque\Model\ConventionManager();

    $postConventionClient = $postManager->readDetailConvention($_GET['siret_client']);

    require('view/frontend/modifierConventionView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le client et tous ses champs et les transmet au modèle : updateDetailClient
function modifierConvention($siret_client, $nbreres_principales_conv, $nbrelog_sociaux_conv, $calcul_estimatif_conv, $boolean_convention, $date_debut_conv, $date_fin_conv, $durée_mois_conv, $montant_annuel_conv, $commentaire_conv, $lien_conv)
{
    $conventionManager = new \Contratheque\Model\ConventionManager();
  
    $postConvention = $conventionManager->updateDetailConvention($_GET['siret_client'], $_POST['nbreres_principales_conv'], $_POST['nbrelog_sociaux_conv'], $_POST['calcul_estimatif_conv'], $_POST['boolean_convention'], $_POST['date_debut_conv_fr'], $_POST['date_fin_conv_fr'], $_POST['durée_mois_conv'], $_POST['montant_annuel_conv'], $_POST['commentaire_conv'], $_POST['lien_conv']);

    if ($postConvention === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour afficher l'historique du suivi convention d'un client et les transmet au modèle : detailClient($_GET['siret'])
function listeSuiviConvention()
{

    $historiqueSuiviConventionManager = new \Contratheque\model\SuiviConventionManager();
    
    $historiqueSuiviConvention = $historiqueSuiviConventionManager->readHistoriqueSuiviConvention($_GET['siret_client']);

    require('view/frontend/historiqueSuiviConventionView.php');
}





