<!-- Ceci est le controleur : on y regroupe nos fonctions -->

<?php

// Chargement des classes
require_once('model/ClientManager.php');
require_once('model/CommentManager.php');

// Ce contrôleur récupère lui aussi les informations dont on a besoin (id du billet, auteur, commentaire) et les transmet au modèle :
function readClients()
{
    $postManager = new \Contratheque\Model\ClientManager(); // Création d'un objet
    $posts = $postManager->listeDesClients(); // Appel d'une fonction de cet objet

    require('view/frontend/listClientsView.php');
}

function readDetailClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $post = $postManager->detailClient($_GET['siret']);

    require('view/frontend/detailClientView.php');
}

function formulaireUpdateClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $post = $postManager->detailClient($_GET['siret']);

    require('view/frontend/editClientView.php');
}

function UpdateClient()
{
    $postManager = new \Contratheque\Model\ClientManager();

    $post = $postManager->detailClient($_GET['siret']);

    require('view/frontend/editClientView.php');
}

// Ce contrôleur récupère lui aussi les informations dont on a besoin (id du billet, auteur, commentaire) et les transmet au modèle :

function addComment($postId, $author, $comment)
{
    $commentManager = new \Contratheque\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        // Erreur gérée. Elle sera remontée jusqu'au bloc try du routeur !
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

// Ce contrôleur récupère lui aussi les informations dont on a besoin (id du billet, auteur, commentaire) et les transmet au modèle :
function viewComment()
{
    $commentManager = new \Contratheque\Model\CommentManager();
    $comment = $commentManager->getComment($_GET['id']);
  
    require('view/frontend/editView.php');
}
  
  
function editComment($id, $comment)
{
    $commentManager = new \Contratheque\Model\CommentManager();
  
    $newComment = $commentManager->updateComment($id, $comment);
  
    if ($newComment === false) {
  
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
        echo 'commentaire : ' . $_POST['comment'];
        header('Location: index.php?action=viewComment&id=' . $id);
    }
}