<!-- Ceci est le routeur : Son objectif va être d'appeler le bon contrôleur -->
<!-- (on dit qu'il route les requêtes) -->

<?php
require('controller/frontend.php');

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            readClients();
        }
        elseif ($_GET['action'] == 'client') {
            if (isset($_GET['siret']) && $_GET['siret'] > 0) {
                readDetailClient();
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'editClientView') {
            if (isset($_GET['siret']) && $_GET['siret'] > 0) {
                updateDetailClient($_POST['siret']);
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
        elseif ($_GET['action'] == 'editComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['comment'])) {
                    editComment($_GET['id'], $_POST['comment']);  
                   }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } */
    }
    else {
        readClients();
    }
    }
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}