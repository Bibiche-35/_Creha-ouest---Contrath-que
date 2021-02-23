<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php?action=client&amp;siret=<?= $post['siret_client'] ?>">Retour au client</a></p>
  
<h2>Modifier un client</h2>


  
<form action="index.php?action=client&amp;siret=<?= $post['siret_client'] ?>" method="post">
    <div>
        <p>Siret du client : <?= $post['siret_client'] ?></p>
        <label for="denomination_client">Dénomination Client : </label><textarea id="denomination_client" name="denomination_client"><?= $post['denomination_client'] ?></textarea></br>
        <label for="adresse1_siege">Adresse 1 Siège : </label><textarea id="adresse1_siege" name="adresse1_siege"><?= $post['adresse1_siege'] ?></textarea></br>
        <label for="adresse2_siege">Adresse 2 Siège : </label><textarea id="adresse2_siege" name="adresse2_siege"><?= $post['adresse2_siege'] ?></textarea></br>
        <label for="adresse1_siege">Adresse 3 Siège : </label><textarea id="adresse3_siege" name="adresse3_siege"><?= $post['adresse3_siege'] ?></textarea></br>
        <label for="BP_CS_siege">BP CS Siège : </label><textarea id="BP_CS_siege" name="BP_CS_siege"><?= $post['BP_CS_siege'] ?></textarea></br>
        <label for="code_postal_siege">Code Postal Siège : </label><textarea id="code_postal_siege" name="code_postal_siege"><?= $post['code_postal_siege'] ?></textarea></br>
        <label for="ville_siege">Ville Siège : </label><textarea id="ville_siege" name="ville_siege"><?= $post['ville_siege'] ?></textarea></br>
        <label for="pays_siege">Pays Siège : </label><textarea id="pays_siege" name="pays_siege"><?= $post['pays_siege'] ?></textarea></br>
        <label for="site_internet_siege">Site internet Siège : </label><textarea id="site_internet_siege" name="site_internet_siege"><?= $post['site_internet_siege'] ?></textarea></br>
        <label for="email_siege">E-mail Siège : </label><textarea id="email_siege" name="email_siege"><?= $post['email_siege'] ?></textarea></br>
        <label for="telephone_siege">Téléphone Siège : </label><textarea id="telephone_siege" name="telephone_siege"><?= $post['telephone_siege'] ?></textarea></br>
        <label for="champlibre_chorus">Champ libre CHORUS Siège : </label><textarea id="champlibre_chorus" name="champlibre_chorus"><?= $post['champlibre_chorus'] ?></textarea></br>
        <label for="adresse1_fact">Adresse 1 facturation : </label><textarea id="adresse1_fact" name="adresse1_fact"><?= $post['adresse1_fact'] ?></textarea></br>
        <label for="adresse2_fact">Adresse 2 facturation : </label><textarea id="adresse2_fact" name="adresse2_fact"><?= $post['adresse2_fact'] ?></textarea></br>
        <label for="adresse3_fact">Adresse 3 facturation : </label><textarea id="adresse3_fact" name="adresse3_fact"><?= $post['adresse3_fact'] ?></textarea></br>
        <label for="BP_CS_fact">BP CS facturation : </label><textarea id="BP_CS_fact" name="BP_CS_fact"><?= $post['BP_CS_fact'] ?></textarea></br>
        <label for="code_postal_fact">Code Postal facturation : </label><textarea id="code_postal_fact" name="code_postal_fact"><?= $post['code_postal_fact'] ?></textarea></br>
        <label for="ville_fact">Ville facturation : </label><textarea id="ville_fact" name="ville_fact"><?= $post['ville_fact'] ?></textarea></br>
        <label for="pays_fact">Pays facturation : </label><textarea id="pays_fact" name="pays_fact"><?= $post['pays_fact'] ?></textarea></br>
        <label for="email_fact">E-mail facturation : </label><textarea id="email_fact" name="email_fact"><?= $post['email_fact'] ?></textarea></br>
        <label for="telephone_fact">Téléphone facturation : </label><textarea id="telephone_fact" name="telephone_fact"><?= $post['telephone_fact'] ?></textarea></br>
    </div>
    <div>
        <input type="submit" value="Modifier" />
    </div>
</form>
  
<?php $content = ob_get_clean(); ?>
  
<?php require('template.php'); ?>