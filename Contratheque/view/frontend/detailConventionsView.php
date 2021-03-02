<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>

<p>Détail des conventions actives :</p>

<table class="table table-conventions">
<thead>
    <tr>
        <th scope="col">Siret du client : </th>
        <th scope="col">Type du client : </th>
        <th scope="col">Dénomination : </th>
        <th scope="col">Date début convention : </th> 
        <th scope="col">Date fin de convention : </th>
        <th scope="col">Durée en mois : </th>
        <th scope="col">Montannt Annuel : </th>
        <th scope="col">Commentaire libre sur convention : </th>
        <th scope="col">Lien Réseau vers convention : </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $listeConventionsClients['siret_client'];?></td>
        <td><?= $listeConventionsClients['denomination_type'];?></td>
        <td><?= $listeConventionsClients['denomination_client'];?></td>
        <td><?= $listeConventionsClients['date_debut_conv_fr'];?> </td>
        <td><?= $listeConventionsClients['date_fin_conv_fr'];?> </td>
        <td><?= $listeConventionsClients['durée_mois_conv'];?> </td>
        <td><?= $listeConventionsClients['montant_annuel_conv'];?></td>
        <td><?= $listeConventionsClients['commentaire_conv'];?></td>
        <td><?= $listeConventionsClients['lien_conv'];?></td>
    </tr>
</tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('../contratheque/view/template/template.php'); ?>