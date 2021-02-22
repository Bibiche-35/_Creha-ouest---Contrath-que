<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Ma super contrathèqe !</h1>
<p><a href="index.php">Retour à la liste des clients</a></p>

<p>Détail du client :</p>

<table class="table table-striped">
<thead>
    <tr>
        <th scope="col">Siret du client</th>
        <th scope="col">Dénomination</th>
        <th scope="col">Adresse 1 Siege</th> 
        <th scope="col">Adresse 2 Siege</th>
        <th scope="col">Adresse 3 Siege</th>
        <th scope="col">BP_CS Siege</th>
        <th scope="col">Code postal Siege</th>
        <th scope="col">Ville Siege</th>
        <th scope="col">Pays Siege</th>
        <th scope="col">site_internet Siege</th>
        <th scope="col">E-mail Siege</th>
        <th scope="col">Télephone Siege</th>
        <th scope="col">Champ libre Chorus</th> 
        <th scope="col">Adresse2 Facturation</th>
        <th scope="col">Adresse2 Facturation</th>
        <th scope="col">Adresse3 Facturation</th>
        <th scope="col">BP_CS Facturation</th>
        <th scope="col">Code Postal Facturation</th>
        <th scope="col">Ville Facturation</th>
        <th scope="col">Pays Facturation</th>
        <th scope="col">E-mail Facturation</th>
        <th scope="col">Télephone Facturation</th>
    </tr>
</thead>
<tbody>
<!-- TODO #1 boucler sur le tableau $bookList contenant tous les livres
(supprimez ces 2 lignes d'exemple) -->
    <tr>
        <td><?= $post['siret_client'];?></td>
        <td><?= $post['denomination_client'];?></td>
        <td><?= $post['adresse1_siege'];?> </td>
        <td><?= $post['adresse2_siege'];?> </td>
        <td><?= $post['adresse3_siege'];?> </td>
        <td><?= $post['BP_CS_siege'];?></td>
        <td><?= $post['code_postal_siege'];?></td>
        <td><?= $post['ville_siege'];?></td>
        <td><?= $post['pays_siege'];?></td>
        <td><?= $post['site_internet_siege'];?></td>
        <td><?= $post['email_siege'];?></td>
        <td><?= $post['telephone_siege'];?></td>
        <td><?= $post['champlibre_chorus'];?></td>
        <td><?= $post['adresse1_fact'];?> </td>
        <td><?= $post['adresse2_fact'];?> </td>
        <td><?= $post['adresse3_fact'];?> </td>
        <td><?= $post['BP_CS_fact'];?></td>
        <td><?= $post['code_postal_fact'];?></td>
        <td><?= $post['ville_fact'];?></td>
        <td><?= $post['pays_fact'];?></td>
        <td><?= $post['email_fact'];?></td>
        <td><?= $post['telephone_fact'];?></td>
    </tr>
</tbody>
</table>
<a href="index.php?action=editClientView&amp;id=<?= $post['siret_client'] ?>">Modifier les informations</a>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>