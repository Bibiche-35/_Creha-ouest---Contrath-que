<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=listeClients">Retour à la liste des clients</a></p>

<p><a href="index.php?action=detailClient&amp;siret_client=<?= $_GET['siret_client'] ?>">Retour au client</a></p>

<p>Historiques des modifications de la déontologie du client :</p>
<p>Siret du Client concerné :<?= $_GET['siret_client'] ?></p>

<table class="table table-striped">
<thead>
    <tr>
        <th scope="col">Auteur du commentaire</th>
        <th scope="col">Statut du commentaire</th>
        <th scope="col">Zone de commentaire libre</th>
        <th scope="col">Date du commentaire</th>
    </tr>
</thead>
<tbody>
<!-- TODO #1 boucler sur le tableau $bookList contenant tous les livres
(supprimez ces 2 lignes d'exemple) -->
<?php foreach($historiqueSuiviDeontologie as $detail) :?>  
    <tr>
        <td><?= $detail['auteur_deon'];?></td>
        <td><?= $detail['statut_deon'];?></td>
        <td><?= $detail['commentaire_deon'];?></td>
        <td><?= $detail['datetime_deon_fr'];?> </td>
    </tr>
<?php endforeach ?>  
</tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>