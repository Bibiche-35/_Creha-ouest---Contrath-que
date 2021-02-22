<!-- Ceci est le routeur : Son objectif va être d'appeler le bon contrôleur -->
<!-- (on dit qu'il route les requêtes) -->

<?php
require('controller/livres.php');

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listLivres') {
            listLivres();
        }
        elseif ($_GET['action'] == 'livre') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                detailLivre($_GET['id']);
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de livre envoyé');
            }
        }
    }
    else {
        listLivres();
    }
    }
catch(Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/errorView.php');
}