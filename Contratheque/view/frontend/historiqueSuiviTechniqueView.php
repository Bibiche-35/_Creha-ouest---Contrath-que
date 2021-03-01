<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=listeClients">Retour à la liste des clients</a></p>

<p><a href="index.php?action=detailClient&amp;siret_client=<?= $_GET['siret_client'] ?>">Retour au client</a></p>

<p>Historiques des modifications du dossier Technique du client :</p>
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
<?php foreach($historiqueSuiviTechnique as $detail) :?>  
    <tr>
        <td><?= $detail['auteur_tech'];?></td>
        <td><?= $detail['statut_tech'];?></td>
        <td><?= $detail['commentaire_tech'];?></td>
        <td><?= $detail['datetime_tech_fr'];?> </td>
    </tr>
<?php endforeach ?>  
</tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('template/template.php'); ?>