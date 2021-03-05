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
require_once('model/TechniqueManager.php');
require_once('model/SuiviTechniqueManager.php');
require_once('model/ProspectionManager.php');
require_once('model/SuiviProspectionManager.php');
require_once('model/ContactManager.php');

// Ce contrôleur récupère toutes les informations qu'il a besoin pour lire tous les clients avec des champs définis et les transmet au modèle : listeDesClients()
function listeClients()
{
    $postManager = new \Contratheque\Model\ClientManager(); // Création d'un objet
    $postClients = $postManager->readListeClients(); // Appel d'une fonction de cet objet

    require('view/frontend/listeClientsView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour lire tous les clients avec des champs définis et les transmet au modèle : listeDesClients()
function rechercheDenominationClient()
{
    $denomination_client = $_POST['recherchedenomination'];
    $postManager = new \Contratheque\Model\ClientManager(); // Création d'un objet
    $postClients = $postManager->readDenominationClients($denomination_client); // Appel d'une fonction de cet objet

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
    $techniqueClient = new \Contratheque\model\TechniqueManager();
    $suiviTechniqueClient = new \Contratheque\model\SuiviTechniqueManager();
    $prospectionClient = new \Contratheque\model\ProspectionManager();
    $suiviProspectionClient = new \Contratheque\model\SuiviProspectionManager();
    $contactPrincipalClient = new \Contratheque\model\ContactManager();
    $contactFacturationClient = new \Contratheque\model\ContactManager();

    
    $postClient = $postManager->readDetailClient($_GET['siret']);
    $postDepartements = $departementManager->readDepartements($_GET['siret']);
    $postSuiviClient = $suiviClientManager->readDernierSuiviClient($_GET['siret']);
    $postConventionClient = $conventionClient->readDetailConvention($_GET['siret']);
    $postSuiviConvention = $suiviConventionClient->readDernierSuiviConvention($_GET['siret']);
    $postDeontologieClient = $deontologieClient->readDetailDeontologie($_GET['siret']);
    $postSuiviDeontologie = $suiviDeontologieClient->readDernierSuiviDeontologie($_GET['siret']);
    $postTechniqueClient = $techniqueClient->readDetailTechnique($_GET['siret']);
    $postSuiviTechnique = $suiviTechniqueClient->readDernierSuiviTechnique($_GET['siret']);
    $postProspectionClient = $prospectionClient->readDetailProspection($_GET['siret']);
    $postSuiviProspection = $suiviProspectionClient->readDernierSuiviProspection($_GET['siret']);
    $postContactPrincipalClient = $contactPrincipalClient->readContactContratClient($_GET['siret']);
    $postContactFacturationClient = $contactFacturationClient->readContactFacturationClient($_GET['siret']);

    require('view/frontend/detailClientView.php');
}

function listeConventionsclients()
{
    $conventionsClients = new \Contratheque\model\ConventionManager();

    $listeConventionsClients = $conventionsClients->readConventionsClients();

    require('view/frontend/detailConventionsView.php');
}

function formulaireModificationClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $postClient = $postManager->readDetailClient($_GET['siret']);

    require('view/frontend/modifierClientView.php');
}


// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le client et tous ses champs et les transmet au modèle : updateDetailClient
function modifierClient($siret_client, $denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact)
{
    $clientManager = new \Contratheque\Model\ClientManager();
  
    $postClient = $clientManager->updateDetailClient($_GET['siret'], $_POST['denomination_client'], $_POST['adresse1_siege'], $_POST['adresse2_siege'], $_POST['adresse3_siege'], $_POST['BP_CS_siege'], $_POST['code_postal_siege'], $_POST['ville_siege'], $_POST['pays_siege'], $_POST['site_internet_siege'], $_POST['email_siege'], $_POST['telephone_siege'], $_POST['champlibre_chorus'], $_POST['adresse1_fact'], $_POST['adresse2_fact'], $_POST['adresse3_fact'], $_POST['BP_CS_fact'], $_POST['code_postal_fact'], $_POST['ville_fact'], $_POST['pays_fact'], $_POST['email_fact'], $_POST['telephone_fact']);

    if ($postClient === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour afficher l'historique des modifications client et les transmet au modèle : detailClient($_GET['siret'])
function listeSuiviClient()
{

    $historiqueSuiviClientManager = new \Contratheque\model\SuiviClientManager();
    
    $historiqueSuiviClient = $historiqueSuiviClientManager->readHistoriqueSuiviClient($_GET['siret']);

    require('view/frontend/historiqueSuiviClientView.php');
}

function formulaireModificationConvention()
{
    $postManager = new \Contratheque\Model\ConventionManager();

    $postConventionClient = $postManager->readDetailConvention($_GET['siret']);

    require('view/frontend/modifierConventionView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le suivi convention du client (avec tous ses champs) et les transmet au modèle : updateDetailConvention
function modifierConvention($siret_client, $nbreres_principales_conv, $nbrelog_sociaux_conv, $calcul_estimatif_conv, $boolean_convention, $date_debut_conv, $date_fin_conv, $durée_mois_conv, $montant_annuel_conv, $commentaire_conv, $lien_conv, $auteur_deon, $statut_deon, $commentaire_deon, $id_info_convention)
{
    $conventionManager = new \Contratheque\Model\ConventionManager();
  
    $postConvention = $conventionManager->updateDetailConvention($_GET['siret'], $_POST['nbreres_principales_conv'], $_POST['nbrelog_sociaux_conv'], $_POST['calcul_estimatif_conv'], $_POST['boolean_convention'], $_POST['date_debut_conv_fr'], $_POST['date_fin_conv_fr'], $_POST['durée_mois_conv'], $_POST['montant_annuel_conv'], $_POST['commentaire_conv'], $_POST['lien_conv'], $_POST['auteur_conv'], $_POST['statut_conv'], $_POST['commentaire_conv'], $_GET['id_conv']);

    if ($postConvention === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour afficher l'historique du suivi convention d'un client et les transmet au modèle : detailClient($_GET['siret'])
function listeSuiviConvention()
{

    $historiqueSuiviConventionManager = new \Contratheque\model\SuiviConventionManager();
    
    $historiqueSuiviConvention = $historiqueSuiviConventionManager->readHistoriqueSuiviConvention($_GET['siret']);

    require('view/frontend/historiqueSuiviConventionView.php');
}

function formulaireModificationDeontologie()
{
    $postManager = new \Contratheque\Model\DeontologieManager();

    $postDeontologieClient = $postManager->readDetailDeontologie($_GET['siret']);

    require('view/frontend/modifierDeontologieView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le suivi deontologie du client (avec tous ses champs) et les transmet au modèle : updateDetailDeontologie
function modifierDeontologie($siret_client, $boolean_acte_engagement, $date_signature_acte_fr, $zone_rem_sanction)
{
    $conventionManager = new \Contratheque\Model\DeontologieManager();
  
    $postConvention = $conventionManager->updateDetailDeontologie($_GET['siret'], $_POST['boolean_acte_engagement'], $_POST['date_signature_acte_fr'], $_POST['zone_rem_sanction']);

    if ($postConvention === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour afficher l'historique du suivi convention d'un client et les transmet au modèle : detailClient($_GET['siret'])
function listeSuiviDeontologie()
{

    $historiqueSuiviDeontologieManager = new \Contratheque\model\SuiviDeontologieManager();
    
    $historiqueSuiviDeontologie = $historiqueSuiviDeontologieManager->readHistoriqueSuiviDeontologie($_GET['siret']);

    require('view/frontend/historiqueSuiviDeontologieView.php');
}

function formulaireModificationTechnique()
{
    $postManager = new \Contratheque\Model\TechniqueManager();

    $postTechniqueClient = $postManager->readDetailTechnique($_GET['siret']);

    require('view/frontend/modifierTechniqueView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le suivi Technique du client (avec tous ses champs) et les transmet au modèle : updateDetailTechnique
function modifierTechnique($siret_client, $nbre_utilisateurs, $saisie_bool, $consultation_bool, $statistiques_bool)
{
    $techniqueManager = new \Contratheque\Model\TechniqueManager();
  
    $postTechnique = $techniqueManager->updateDetailTechnique($_GET['siret'], $_POST['nbre_utilisateurs'], $_POST['saisie_bool'], $_POST['consultation_bool'], $_POST['statistiques_bool']);

    if ($postTechnique === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour afficher l'historique du suivi Technique d'un client et les transmet au modèle : detailClient($_GET['siret'])
function listeSuiviTechnique()
{

    $historiqueSuiviTechniqueManager = new \Contratheque\model\SuiviTechniqueManager();
    
    $historiqueSuiviTechnique = $historiqueSuiviTechniqueManager->readHistoriqueSuiviTechnique($_GET['siret']);

    require('view/frontend/historiqueSuiviTechniqueView.php');
}

function formulaireModificationProspection()
{
    $postManager = new \Contratheque\Model\ProspectionManager();

    $postProspectionClient = $postManager->readDetailProspection($_GET['siret']);

    require('view/frontend/modifierProspectionView.php');
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour modifier le suivi Technique du client (avec tous ses champs) et les transmet au modèle : updateDetailTechnique
function modifierProspection($siret_client, $zone_rem_pros)
{
    $prospectionManager = new \Contratheque\Model\ProspectionManager();
  
    $postProspection = $prospectionManager->updateDetailProspection($_GET['siret'], $_POST['zone_rem_pros']);

    if ($postProspection === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
}

// Ce contrôleur récupère toutes les informations qu'il a besoin pour afficher l'historique du suivi Technique d'un client et les transmet au modèle : detailClient($_GET['siret'])
function listeSuiviProspection()
{

    $historiqueSuiviProspectionManager = new \Contratheque\model\SuiviProspectionManager();
    
    $historiqueSuiviProspection = $historiqueSuiviProspectionManager->readHistoriqueSuiviProspection($_GET['siret']);

    require('view/frontend/historiqueSuiviProspectionView.php');
}

