<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=listeClients">Retour à la liste des clients</a></p>

<p>Détail du client :</p>
<a href="index.php?action=modificationClient&amp;siret_client=<?= $postClient['siret_client'] ?>">Modifier les informations du client</a>
<table class="table table-client">
<thead>
    <tr>
        <th scope="col">Siret du client</th>
        <th scope="col">Type du client</th>
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
    <tr>
        <td><?= $postClient['siret_client'];?></td>
        <td><?= $postClient['denomination_type'];?></td>
        <td><?= $postClient['denomination_client'];?></td>
        <td><?= $postClient['adresse1_siege'];?> </td>
        <td><?= $postClient['adresse2_siege'];?> </td>
        <td><?= $postClient['adresse3_siege'];?> </td>
        <td><?= $postClient['BP_CS_siege'];?></td>
        <td><?= $postClient['code_postal_siege'];?></td>
        <td><?= $postClient['ville_siege'];?></td>
        <td><?= $postClient['pays_siege'];?></td>
        <td><?= $postClient['site_internet_siege'];?></td>
        <td><?= $postClient['email_siege'];?></td>
        <td><?= $postClient['telephone_siege'];?></td>
        <td><?= $postClient['champlibre_chorus'];?></td>
        <td><?= $postClient['adresse1_fact'];?> </td>
        <td><?= $postClient['adresse2_fact'];?> </td>
        <td><?= $postClient['adresse3_fact'];?> </td>
        <td><?= $postClient['BP_CS_fact'];?></td>
        <td><?= $postClient['code_postal_fact'];?></td>
        <td><?= $postClient['ville_fact'];?></td>
        <td><?= $postClient['pays_fact'];?></td>
        <td><?= $postClient['email_fact'];?></td>
        <td><?= $postClient['telephone_fact'];?></td>
    </tr>
</tbody>
</table>
</br>

<p>Détail des départemetns associés au Client :</p>
<table class="table table-departements">
<thead>
    <tr>
        <th scope="col">Code departement</th>
        <th scope="col">Dénomination département</th>
    </tr>
</thead>
<tbody>
<?php foreach($postDepartements as $detail) :?>  
    <tr>
        <td><?= $detail['numero_departement'];?></td>
        <td><?= $detail['designation_departement'];?></td>
    </tr>
<?php endforeach ?>
</tbody>  
</table>
</br>  
<a href="index.php?action=lireHistoriqueSuiviClient&amp;siret_client=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi client</a>
<table class="table table-suivi-client">
<thead>
    <tr>
        <th scope="col">Date du commentaire</th>
        <th scope="col">Auteur du commentaire</th>
        <th scope="col">Statut du commentaire</th>
        <th scope="col">Remarques du commentaire</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postSuiviClient['datetime_client_fr'];?></td>
        <td><?= $postSuiviClient['auteur_client'];?></td>
        <td><?= $postSuiviClient['statut_client'];?></td>
        <td><?= $postSuiviClient['commentaire_client'];?></td>
    </tr>  
</tbody>
</table>
</tr> 

<p>Détail de la convention du client :</p>
<a href="index.php?action=modificationConvention&amp;siret_client=<?= $postClient['siret_client'] ?>&amp;denomination_client=<?= $postClient['denomination_client'] ?>">Modifier les informations de la convention</a>
</br>
<table class="table table-convention-client">
<thead>
    <tr>
        <th scope="col">Nbre de résidences principales</th>
        <th scope="col">Nbre de logements sociaux</th>
        <th scope="col">Calcul estimatif convention</th>
        <th scope="col">Existence d'une convention ?</th>
        <th scope="col">Date début convention</th>
        <th scope="col">Date fin de convention</th>
        <th scope="col">Durée en mois</th>
        <th scope="col">Montannt Annuel</th>
        <th scope="col">Commentaire libre sur convention</th>
        <th scope="col">Lien Réseau vers convention</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postConventionClient['nbreres_principales_conv'];?></td>
        <td><?= $postConventionClient['nbrelog_sociaux_conv'];?></td>
        <td><?= $postConventionClient['calcul_estimatif_conv'];?></td>
        <td><?= $postConventionClient['boolean_convention'];?></td>
        <td><?= $postConventionClient['date_debut_conv_fr'];?></td>
        <td><?= $postConventionClient['date_fin_conv_fr'];?></td>
        <td><?= $postConventionClient['durée_mois_conv'];?></td>
        <td><?= $postConventionClient['montant_annuel_conv'];?></td>
        <td><?= $postConventionClient['commentaire_conv'];?></td>
        <td><?= $postConventionClient['lien_conv'];?></td>
    </tr>  
</tbody>
</table>
<a href="index.php?action=lireHistoriqueSuiviConvention&amp;siret_client=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi de la convention du client</a>
<table class="table table-suivi-convention">
<thead>
    <tr>
        <th scope="col">Date du commentaire</th>
        <th scope="col">Auteur du commentaire</th>
        <th scope="col">Statut du commentaire</th>
        <th scope="col">Remarques du commentaire</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postSuiviConvention['datetime_conv_fr'];?></td>
        <td><?= $postSuiviConvention['auteur_conv'];?></td>
        <td><?= $postSuiviConvention['statut_conv'];?></td>
        <td><?= $postSuiviConvention['commentaire_conv'];?></td>
    </tr>  
</tbody>
</table>

<p>Détail de la deontologie du client :</p>
<a href="index.php?action=modificationDeontologie&amp;siret_client=<?= $postClient['siret_client'] ?>&amp;denomination_client=<?= $postClient['denomination_client'] ?>">Modifier les informations de la Déontologie</a>
</br>
<table class="table table-deontologie-client">
<thead>
    <tr>
        <th scope="col">Existence acte d'engagement : </th>
        <th scope="col">date de signature de l'acte d'engagement :</th>
        <th scope="col">Commentaire libre sur Deontologie : </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postDeontologieClient['boolean_acte_engagement'];?></td>
        <td><?= $postDeontologieClient['date_signature_acte_fr'];?></td>
        <td><?= $postDeontologieClient['zone_rem_sanction'];?></td>
    </tr>  
</tbody>
</table>
<a href="index.php?action=lireHistoriqueSuiviDeontologie&amp;siret_client=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi de la déontologie du client</a>
<table class="table table-suivi-deontologie">
<thead>
    <tr>
        <th scope="col">Date du commentaire : </th>
        <th scope="col">Auteur du commentaire : </th>
        <th scope="col">Statut du commentaire : </th>
        <th scope="col">Remarques du commentaire : </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postSuiviDeontologie['datetime_deon_fr'];?></td>
        <td><?= $postSuiviDeontologie['auteur_deon'];?></td>
        <td><?= $postSuiviDeontologie['statut_deon'];?></td>
        <td><?= $postSuiviDeontologie['commentaire_deon'];?></td>
    </tr>  
</tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>