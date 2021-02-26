<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=detailClient&amp;siret_client=<?= $_GET['siret_client'] ?>">Retour au client</a></p>
  
<h2>Modifier la deontologie du client</h2>

<form action="index.php?action=modifierDeontologie&amp;siret_client=<?= $_GET['siret_client'] ?>" method="post">
    <div>
        <h5>
            <p>Siret du client : <?= $_GET['siret_client'] ?></p>
        </h5>

        <label for="boolean_acte_engagement">Existence acte d'engagement : </label><input id="boolean_acte_engagement" type="text" name="boolean_acte_engagement" value="<?= $postDeontologieClient['boolean_acte_engagement'] ?>"></br>
        <label for="date_signature_acte_fr">date de signature de l'acte d'engagement : </label><input id="date_signature_acte_fr" type="date" name="date_signature_acte_fr" value="<?= $postDeontologieClient['date_signature_acte']; ?>"></br>
        <label for="zone_rem_sanction">Commentaire libre sur deontologie :</label><input id="zone_rem_sanction" type="text" name="zone_rem_sanction" value="<?= $postDeontologieClient['zone_rem_sanction'] ?>"></br>
    </div>
    <div>
        <input type="submit" value="Enregistrer les modifications" />
    </div>

</form>
  
<?php $content = ob_get_clean(); ?>
  
<?php require('template.php'); ?>