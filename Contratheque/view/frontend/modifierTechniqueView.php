<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=detailClient&amp;siret_client=<?= $_GET['siret_client'] ?>">Retour au client</a></p>
  
<h2>Modifier le dossier Technique du client</h2>

<form action="index.php?action=modifierTechnique&amp;siret_client=<?= $_GET['siret_client'] ?>" method="post">
    <div>
        <h5>
            <p>Siret du client : <?= $_GET['siret_client'] ?></p>
        </h5>

        <label for="nbre_utilisateurs">Nbre d'utilisateurs : </label><input id="nbre_utilisateurs" type="text" name="nbre_utilisateurs" value="<?= $postTechniqueClient['nbre_utilisateurs'] ?>"></br>
        <label for="saisie_bool">Saisie Boolean : </label><input id="saisie_bool" type="text" name="saisie_bool" value="<?= $postTechniqueClient['saisie_bool']; ?>"></br>
        <label for="consultation_bool">Consultation Boolean : </label><input id="consultation_bool" type="text" name="consultation_bool" value="<?= $postTechniqueClient['consultation_bool'] ?>"></br>
        <label for="statistiques_bool">Statistiques Boolean : </label><input id="statistiques_bool" type="text" name="statistiques_bool" value="<?= $postTechniqueClient['statistiques_bool'] ?>"></br>
    </div>
    <div>
        <input type="submit" value="Enregistrer les modifications" />
    </div>

</form>
  
<?php $content = ob_get_clean(); ?>
  
<?php require('../contratheque/view/template/template.php'); ?>