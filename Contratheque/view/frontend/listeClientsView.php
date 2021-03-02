<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p>Liste des clients :</p>

<table class="table table-striped">
<thead>
    <tr>
        <th scope="col">Détail</th>
        <th scope="col">Type de client</th>
        <th scope="col">Siret du client</th>
        <th scope="col">Dénomination</th>
        <th scope="col">Adresse 1 Siege</th> 
        <th scope="col">Adresse 2 Suite</th>
        <th scope="col">Adresse 3 Suite</th>
        <th scope="col">BP_CS_siege</th>
        <th scope="col">code_postal_siege</th>
        <th scope="col">ville_siege</th>
        <th scope="col">E-Mail Siège</th>
        <th scope="col">Téléphone Siège</th>
    </tr>
</thead>
<tbody>
<!-- TODO #1 boucler sur le tableau $bookList contenant tous les livres
(supprimez ces 2 lignes d'exemple) -->
<?php foreach($postClients as $detail) :?>  
    <tr>
        <td><a href="index.php?action=detailClient&amp;siret_client=<?= $detail['siret_client'] ?>">Détail</a></td>
        <td><?= $detail['denomination_type'];?></td>
        <td><?= $detail['siret_client'];?></td>
        <td><?= $detail['denomination_client'];?></td>
        <td><?= $detail['adresse1_siege'];?> </td>
        <td><?= $detail['adresse2_siege'];?> </td>
        <td><?= $detail['adresse3_siege'];?> </td>
        <td><?= $detail['BP_CS_siege'];?></td>
        <td><?= $detail['code_postal_siege'];?></td>
        <td><?= $detail['ville_siege'];?></td>
        <td><?= $detail['email_fact'];?></td>
        <td><?= $detail['telephone_fact'];?></td>
    </tr>
<?php endforeach ?>  
</tbody>
</table>


<?php $content = ob_get_clean(); ?>

<?php require('../contratheque/view/template/template.php'); ?>