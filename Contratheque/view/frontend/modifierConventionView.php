<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=detailClient&amp;siret_client=<?= $_GET['siret_client'] ?>">Retour au client</a></p>
  
<h2>Modifier la convention du client</h2>

<form action="index.php?action=modifierConvention&amp;siret_client=<?= $_GET['siret_client'] ?>" method="post">
    <div>
        <h5>
            <p>Siret du client : <?= $_GET['siret_client'] ?></p>
        </h5>

        <label for="nbreres_principales_conv">Nbre de résidences principales : </label><input id="nbreres_principales_conv" type="text" name="nbreres_principales_conv" value="<?= $postConventionClient['nbreres_principales_conv'] ?>"></br>
        <label for="nbrelog_sociaux_conv">Nbre de logements sociaux : </label><input id="nbrelog_sociaux_conv" type="text" name="nbrelog_sociaux_conv" value="<?= $postConventionClient['nbrelog_sociaux_conv']; ?>"></br>
        <label for="calcul_estimatif_conv">Calcul estimatif convention : </label><input id="calcul_estimatif_conv" type="text" name="calcul_estimatif_conv" value="<?= $postConventionClient['calcul_estimatif_conv'] ?>"></br>
        <label for="boolean_convention">Existence d'une convention ? : </label><input id="boolean_convention" type="text" name="boolean_convention" value="<?= $postConventionClient['boolean_convention'] ?>"></br>
        <label for="date_debut_conv_fr">Date début convention : </label><input id="date_debut_conv_fr" type="date" name="date_debut_conv_fr" value="<?= $postConventionClient['date_debut_conv'] ?>"></br>
        <label for="date_fin_conv_fr">Date fin de convention : </label><input id="date_fin_conv_fr" type="date" name="date_fin_conv_fr" value="<?= $postConventionClient['date_fin_conv'] ?>"></br>
        <label for="durée_mois_conv">Durée en mois : </label><input id="durée_mois_conv" type="text" name="durée_mois_conv" value="<?= $postConventionClient['durée_mois_conv'] ?>"></br>
        <label for="montant_annuel_conv">Montannt Annuel : </label><input id="montant_annuel_conv" type="text" name="montant_annuel_conv" value="<?= $postConventionClient['montant_annuel_conv'] ?>"></br>
        <label for="commentaire_conv">Commentaire libre sur convention : </label><input id="commentaire_conv" type="text" name="commentaire_conv" value="<?= $postConventionClient['commentaire_conv'] ?>"></br>
        <label for="lien_conv">Lien Réseau vers convention : </label><input id="lien_conv" type="text" name="lien_conv" value="<?= $postConventionClient['lien_conv'] ?>"></br>
    </div>
    <div>
        <input type="submit" value="Enregistrer les modifications" />
    </div>

</form>
  
<?php $content = ob_get_clean(); ?>
  
<?php require('../contratheque/view/template/template.php'); ?>'); ?>