<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=detailClient&amp;siret_client=<?= $_GET['siret_client'] ?>">Retour au client</a></p>
  
<h2>Modifier le dossier Prospection du client</h2>

<form action="index.php?action=modifierProspection&amp;siret_client=<?= $_GET['siret_client'] ?>" method="post">
    <div>
        <h5>
            <p>Siret du client : <?= $_GET['siret_client'] ?></p>
        </h5>

        <label for="zone_rem_pros">Champ libre Prospection : </label><input id="zone_rem_pros" type="text" name="zone_rem_pros" value="<?= $postProspectionClient['zone_rem_pros'] ?>"></br>
    </div>
    <div>
        <input type="submit" value="Enregistrer les modifications" />
    </div>

</form>
  
<?php $content = ob_get_clean(); ?>
  
<?php require('../contratheque/view/template/template.php'); ?>