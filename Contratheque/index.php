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
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
/*        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'viewComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                viewComment();
            }
            else {
                throw new Exception('Aucun commentaire trouvé !');
            }
        } 
        elseif ($_GET['action'] == 'editClient') {
            if (isset($_GET['siret_client']) && $_GET['siret_client'] > 0) {
                updateClient($_GET['siret_client'], $_POST['denomination_client'], $_POST['adresse1_siege'], $_POST['adresse2_siege'], $_POST['adresse3_siege'], $_POST['BP_CS_siege'], $_POST['code_postal_siege'], $_POST['ville_siege'], $_POST['pays_siege'], $_POST['site_internet_siege'], $_POST['email_siege'], $_POST['telephone_siege'], $_POST['champlibre_chorus'], $_POST['adresse1_fact'], $_POST['adresse2_fact'], $_POST['adresse3_fact'], $_POST['BP_CS_fact'], $_POST['code_postal_fact'], $_POST['ville_fact'], $_POST['pays_fact'], $_POST['email_fact'], $_POST['telephone_fact']);

            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }  */
    }
    else {
        listeClients();
    }
    }
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}