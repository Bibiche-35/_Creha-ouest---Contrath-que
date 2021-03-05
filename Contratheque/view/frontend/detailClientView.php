<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>

<p>Détail du client :</p>
<a href="index.php?action=modificationClient&amp;siret=<?= $postClient['siret_client'] ?>">Modifier les informations du client</a>
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

<p>Détail des départements associés au Client :</p>
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

<p>Contact principal Client :</p>
<table class="table table-contactPrincipal">
<thead>
    <tr>
        <th scope="col">Nom : </th>
        <th scope="col">Prénom : </th>
        <th scope="col">Fonction :</th>
        <th scope="col">Téléphone fixe : </th>
        <th scope="col">Téléphone portable : </th>
        <th scope="col">E-mail : </th>
        <th scope="col">Remarque : </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postContactPrincipalClient['nom_contact'];?></td>
        <td><?= $postContactPrincipalClient['prenom_contact'];?></td>
        <td><?= $postContactPrincipalClient['nom_fonction'];?></td>
        <td><?= $postContactPrincipalClient['telfixe_contact'];?></td>
        <td><?= $postContactPrincipalClient['telport_contact'];?></td>
        <td><?= $postContactPrincipalClient['email_contact'];?></td>
        <td><?= $postContactPrincipalClient['remarque_contact'];?></td>
    </tr>  
</tbody>
</table>

<p>Contact facturation Client :</p>
<table class="table table-contactFacturation">
<thead>
    <tr>
        <th scope="col">Nom : </th>
        <th scope="col">Prénom : </th>
        <th scope="col">Fonction :</th>
        <th scope="col">Téléphone fixe : </th>
        <th scope="col">Téléphone portable : </th>
        <th scope="col">E-mail : </th>
        <th scope="col">Remarque : </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postContactFacturationClient['nom_contact'];?></td>
        <td><?= $postContactFacturationClient['prenom_contact'];?></td>
        <td><?= $postContactFacturationClient['nom_fonction'];?></td>
        <td><?= $postContactFacturationClient['telfixe_contact'];?></td>
        <td><?= $postContactFacturationClient['telport_contact'];?></td>
        <td><?= $postContactFacturationClient['email_contact'];?></td>
        <td><?= $postContactFacturationClient['remarque_contact'];?></td>
    </tr>  
</tbody>
</table>



</br>  
<a href="index.php?action=lireHistoriqueSuiviClient&amp;siret=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi client</a>
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
<a href="index.php?action=modificationConvention&amp;siret=<?= $postClient['siret_client'] ?>&amp;denomination_client=<?= $postClient['denomination_client'] ?>&amp;id_conv=<?= $postConventionClient['id_info_convention'] ?>">Modifier les informations de la convention</a>
</br>
<table class="table table-convention-client">
<thead>
    <tr>
        <th scope="col">identifiant convention</th>        
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
        <td><?= $postConventionClient['id_info_convention'];?></td>
        <td><?= $postConventionClient['nbreres_principales_conv'];?></td>
        <td><?= $postConventionClient['nbrelog_sociaux_conv'];?></td>
        <td><?= $postConventionClient['calcul_estimatif_conv'];?></td>
        <td><?= $postConventionClient['boolean_convention'];?></td>
        <td><?= $postConventionClient['date_debut_conv_fr'];?></td>
        <td><?= $postConventionClient['date_fin_conv_fr'];?></td>
        <td><?= $postConventionClient['durée_mois_conv'];?></td>
        <td><?= $postConventionClient['montant_annuel_conv'];?></td>
        <td><?= $postConventionClient['comment_conv'];?></td>
        <td><?= $postConventionClient['lien_conv'];?></td>
    </tr>  
</tbody>
</table>
<a href="index.php?action=lireHistoriqueSuiviConvention&amp;siret=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi de la convention du client</a>
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
<a href="index.php?action=modificationDeontologie&amp;siret=<?= $postClient['siret_client'] ?>&amp;denomination_client=<?= $postClient['denomination_client'] ?>">Modifier les informations de la Déontologie</a>
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
<a href="index.php?action=lireHistoriqueSuiviDeontologie&amp;siret=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi de la déontologie du client</a>
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

<p>Détail du dossier technique du client :</p>
<a href="index.php?action=modificationTechnique&amp;siret=<?= $postClient['siret_client'] ?>&amp;denomination_client=<?= $postClient['denomination_client'] ?>">Modifier les informations du dossier technique</a>
</br>
<table class="table table-technique-client">
<thead>
    <tr>
        <th scope="col">Nbre d'utilisateurs : </th>
        <th scope="col">Saisie Boolean : </th>
        <th scope="col">Consultation Boolean : </th>
        <th scope="col">Statistiques Boolean : </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postTechniqueClient['nbre_utilisateurs'];?></td>
        <td><?= $postTechniqueClient['saisie_bool'];?></td>
        <td><?= $postTechniqueClient['consultation_bool'];?></td>
        <td><?= $postTechniqueClient['statistiques_bool'];?></td>
    </tr>  
</tbody>
</table>
<a href="index.php?action=lireHistoriqueSuiviTechnique&amp;siret=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi du dossier technique du client</a>
<table class="table table-suivi-technique">
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
        <td><?= $postSuiviTechnique['datetime_tech_fr'];?></td>
        <td><?= $postSuiviTechnique['auteur_tech'];?></td>
        <td><?= $postSuiviTechnique['statut_tech'];?></td>
        <td><?= $postSuiviTechnique['commentaire_tech'];?></td>
    </tr>  
</tbody>
</table>

<p>Détail de la prospection du client :</p>
<a href="index.php?action=modificationProspection&amp;siret=<?= $postClient['siret_client'] ?>&amp;denomination_client=<?= $postClient['denomination_client'] ?>">Modifier les informations de la prospection</a>
</br>
<table class="table table-prospection-client">
<thead>
    <tr>
        <th scope="col">Champ libre Prospection : </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $postProspectionClient['zone_rem_pros'];?></td>
    </tr>  
</tbody>
</table>
<a href="index.php?action=lireHistoriqueSuiviTechnique&amp;siret=<?= $postClient['siret_client'] ?>">Afficher l'historique du suivi du dossier prospection du client</a>
<table class="table table-suivi-prospection">
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
        <td><?= $postSuiviProspection['datetime_pros_fr'];?></td>
        <td><?= $postSuiviProspection['auteur_pros'];?></td>
        <td><?= $postSuiviProspection['statut_pros'];?></td>
        <td><?= $postSuiviProspection['commentaire_pros'];?></td>
    </tr>  
</tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('../contratheque/view/template/template.php'); ?>