<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>
<h1>Ma super contrathèque !</h1>
<p><a href="index.php?action=detailClient&amp;siret=<?= $postClient['siret_client'] ?>">Retour au client</a></p>
  
<h2>Modifier un client</h2>
  
<form action="index.php?action=modifierClient&amp;siret=<?= $postClient['siret_client'] ?>" method="post">
    <div>
        <p>Siret du client : <?= $postClient['siret_client'] ?></p>
        <label for="denomination_client">Dénomination Client : </label><input id="denomination_client" type="text" name="denomination_client" value="<?= $postClient['denomination_client'] ?>"></br>
        <label for="adresse1_siege">Adresse 1 Siège : </label><input id="adresse1_siege" type="text" name="adresse1_siege" value="<?= $postClient['adresse1_siege'] ?>"></br>
        <label for="adresse2_siege">Adresse 2 Siège : </label><input id="adresse2_siege" type="text" name="adresse2_siege" value="<?= $postClient['adresse2_siege'] ?>"></br>
        <label for="adresse1_siege">Adresse 3 Siège : </label><input id="adresse3_siege" type="text" name="adresse3_siege" value="<?= $postClient['adresse3_siege'] ?>"></br>
        <label for="BP_CS_siege">BP CS Siège : </label><input id="BP_CS_siege" type="text" name="BP_CS_siege" value="<?= $postClient['BP_CS_siege'] ?>"></br>
        <label for="code_postal_siege">Code Postal Siège : </label><input id="code_postal_siege" type="text" name="code_postal_siege" value="<?= $postClient['code_postal_siege'] ?>"></br>
        <label for="ville_siege">Ville Siège : </label><input id="ville_siege" type="text" name="ville_siege" value="<?= $postClient['ville_siege'] ?>"></br>
        <label for="pays_siege">Pays Siège : </label><input id="pays_siege" type="text" name="pays_siege" value="<?= $postClient['pays_siege'] ?>"></br>
        <label for="site_internet_siege">Site internet Siège : </label><input id="site_internet_siege" type="text" name="site_internet_siege" value="<?= $postClient['site_internet_siege'] ?>"></br>
        <label for="email_siege">E-mail Siège : </label><input id="email_siege" type="text" name="email_siege" value="<?= $postClient['email_siege'] ?>"></br>
        <label for="telephone_siege">Téléphone Siège : </label><input id="telephone_siege" type="text" name="telephone_siege" value="<?= $postClient['telephone_siege'] ?>"></br>
        <label for="champlibre_chorus">Champ libre CHORUS Siège : </label><input id="champlibre_chorus" type="text" name="champlibre_chorus" value="<?= $postClient['champlibre_chorus'] ?>"></br>
        <label for="adresse1_fact">Adresse 1 facturation : </label><input id="adresse1_fact" type="text" name="adresse1_fact" value="<?= $postClient['adresse1_fact'] ?>"></br>
        <label for="adresse2_fact">Adresse 2 facturation : </label><input id="adresse2_fact" type="text" name="adresse2_fact" value="<?= $postClient['adresse2_fact'] ?>"></br>
        <label for="adresse3_fact">Adresse 3 facturation : </label><input id="adresse3_fact" type="text" name="adresse3_fact" value="<?= $postClient['adresse3_fact'] ?>"></br>
        <label for="BP_CS_fact">BP CS facturation : </label><input id="BP_CS_fact" type="text" name="BP_CS_fact" value="<?= $postClient['BP_CS_fact'] ?>"></br>
        <label for="code_postal_fact">Code Postal facturation : </label><input id="code_postal_fact" type="text" name="code_postal_fact" value="<?= $postClient['code_postal_fact'] ?>"></br>
        <label for="ville_fact">Ville facturation : </label><input id="ville_fact" type="text" name="ville_fact" value="<?= $postClient['ville_fact'] ?>"></br>
        <label for="pays_fact">Pays facturation : </label><input id="pays_fact" type="text" name="pays_fact" value="<?= $postClient['pays_fact'] ?>"></br>
        <label for="email_fact">E-mail facturation : </label><input id="email_fact" type="text" name="email_fact" value="<?= $postClient['email_fact'] ?>"></br>
        <label for="telephone_fact">Téléphone facturation : </label><input id="telephone_fact" type="text" name="telephone_fact" value="<?= $postClient['telephone_fact'] ?>"></br>
    </div>
    <div>
        <input type="submit" value="Enregistrer les modifications" />
    </div>

</form>
  
<?php $content = ob_get_clean(); ?>
  
<?php require('../contratheque/view/template/template.php'); ?>