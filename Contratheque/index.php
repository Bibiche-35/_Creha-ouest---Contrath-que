<!-- Ceci est le routeur : Son objectif va être d'appeler le bon contrôleur -->
<!-- (on dit qu'il route les requêtes) -->

<?php
require('controller/frontend.php');

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listeClients') {
            listeClients();
        }
        elseif ($_GET['action'] == 'detailClient') {
            if (isset($_GET['siret_client']) && $_GET['siret_client'] > 0) {
                detailClient();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'modificationClient') {
            if (isset($_GET['siret_client']) && $_GET['siret_client'] > 0) {
                formulaireModificationClient();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'modifierClient') {
            if (isset($_GET['siret_client']) && $_GET['siret_client'] > 0) {
                modifierClient($_GET['siret_client'], $_POST['denomination_client'], $_POST['adresse1_siege'], $_POST['adresse2_siege'], $_POST['adresse3_siege'], $_POST['BP_CS_siege'], $_POST['code_postal_siege'], $_POST['ville_siege'], $_POST['pays_siege'], $_POST['site_internet_siege'], $_POST['email_siege'], $_POST['telephone_siege'], $_POST['champlibre_chorus'], $_POST['adresse1_fact'], $_POST['adresse2_fact'], $_POST['adresse3_fact'], $_POST['BP_CS_fact'], $_POST['code_postal_fact'], $_POST['ville_fact'], $_POST['pays_fact'], $_POST['email_fact'], $_POST['telephone_fact']);
                formulaireModificationClient();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'lireHistoriqueSuiviClient') {
            if (isset($_GET['siret_client']) && $_GET['siret_client'] > 0) {
                listeSuiviClient();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'modificationConvention') {
            if ((isset($_GET['siret_client']) && $_GET['siret_client'] > 0) || (isset($_GET['denomination_client']) && $_GET['denomination_client'] > 0)) {
                formulaireModificationConvention();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'modifierConvention') {
            if ((isset($_GET['siret_client']) && $_GET['siret_client'] > 0) || (isset($_GET['denomination_client']) && $_GET['denomination_client'] > 0)) {
                modifierConvention($_GET['siret_client'], $_POST['nbreres_principales_conv'], $_POST['nbrelog_sociaux_conv'], $_POST['calcul_estimatif_conv'], $_POST['boolean_convention'], $_POST['date_debut_conv_fr'], $_POST['date_fin_conv_fr'], $_POST['durée_mois_conv'], $_POST['montant_annuel_conv'], $_POST['commentaire_conv'], $_POST['lien_conv']);
                formulaireModificationConvention();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'lireHistoriqueSuiviConvention') {
            if (isset($_GET['siret_client']) && $_GET['siret_client'] > 0) {
                listeSuiviConvention();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'modificationDeontologie') {
            if ((isset($_GET['siret_client']) && $_GET['siret_client'] > 0) || (isset($_GET['denomination_client']) && $_GET['denomination_client'] > 0)) {
                formulaireModificationDeontologie();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'modifierDeontologie') {
            if ((isset($_GET['siret_client']) && $_GET['siret_client'] > 0) || (isset($_GET['denomination_client']) && $_GET['denomination_client'] > 0)) {
                modifierDeontologie($_GET['siret_client'], $_POST['boolean_acte_engagement'], $_POST['date_signature_acte_fr'], $_POST['zone_rem_sanction']);
                formulaireModificationDeontologie();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }    
        elseif ($_GET['action'] == 'lireHistoriqueSuiviDeontologie') {
            if (isset($_GET['siret_client']) && $_GET['siret_client'] > 0) {
                listeSuiviDeontologie();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    }
    else {
        listeClients();
    }
    }
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}