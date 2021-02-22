<?php $title = 'Modifier un commentaire' ?>
  
<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php">Retour au billet</a></p>
  
<h2>Modifier un client</h2>


  
<form action="index.php?action=detailClientView&amp;id=<?= $post['siret_client'] ?>" method="post">
    <div>
        <p>Siret du client : <?= $post['siret_client'] ?></p>
        <label for="denomination_client">Dénomination Client : </label><textarea id="denomination_client" name="denomination_client"><?= $post['denomination_client'] ?></textarea>
        <label for="adresse1_siege">Adresse 1 Siège : </label><textarea id="adresse1_siege" name="adresse1_siege"><?= $post['adresse1_siege'] ?></textarea>
        <label for="adresse2_siege">Adresse 2 Siège : </label><textarea id="adresse2_siege" name="adresse2_siege"><?= $post['adresse2_siege'] ?></textarea>
        <label for="adresse1_siege">Adresse 3 Siège : </label><textarea id="adresse3_siege" name="adresse3_siege"><?= $post['adresse3_siege'] ?></textarea>
        <label for="BP_CS_siege">BP CS Siège : </label><textarea id="BP_CS_siege" name="BP_CS_siege"><?= $post['BP_CS_siege'] ?></textarea>
        <label for="code_postal_siege">Code Postal Siège : </label><textarea id="code_postal_siege" name="code_postal_siege"><?= $post['code_postal_siege'] ?></textarea>
        <label for="pays_siege">Ville Siège : </label><textarea id="pays_siege" name="pays_siege"><?= $post['pays_siege'] ?></textarea>
        <label for="site_internet_siege">Ville Siège : </label><textarea id="site_internet_siege" name="site_internet_siege"><?= $post['site_internet_siege'] ?></textarea>
        <label for="email_siege">Ville Siège : </label><textarea id="email_siege" name="email_siege"><?= $post['email_siege'] ?></textarea>
        <label for="telephone_siege">Ville Siège : </label><textarea id="telephone_siege" name="telephone_siege"><?= $post['telephone_siege'] ?></textarea>
        <label for="champlibre_chorus">Ville Siège : </label><textarea id="champlibre_chorus" name="champlibre_chorus"><?= $post['champlibre_chorus'] ?></textarea>
        <label for="adresse1_fact">Ville Siège : </label><textarea id="adresse1_fact" name="adresse1_fact"><?= $post['adresse1_fact'] ?></textarea>
        <label for="adresse2_fact">Ville Siège : </label><textarea id="adresse2_fact" name="adresse2_fact"><?= $post['adresse2_fact'] ?></textarea>
        <label for="adresse3_fact">Ville Siège : </label><textarea id="adresse3_fact" name="adresse3_fact"><?= $post['adresse3_fact'] ?></textarea>
        <label for="BP_CS_fact">Ville Siège : </label><textarea id="BP_CS_fact" name="BP_CS_fact"><?= $post['BP_CS_fact'] ?></textarea>
        <label for="code_postal_fact">Ville Siège : </label><textarea id="code_postal_fact" name="code_postal_fact"><?= $post['code_postal_fact'] ?></textarea>
        <label for="ville_fact">Ville Siège : </label><textarea id="ville_fact" name="ville_fact"><?= $post['ville_fact'] ?></textarea>
        <label for="pays_fact">Ville Siège : </label><textarea id="pays_fact" name="pays_fact"><?= $post['pays_fact'] ?></textarea>
        <label for="email_fact">Ville Siège : </label><textarea id="email_fact" name="email_fact"><?= $post['email_fact'] ?></textarea>
        <label for="telephone_fact">Ville Siège : </label><textarea id="telephone_fact" name="telephone_fact"><?= $post['telephone_fact'] ?></textarea>
    </div>
    <div>
        <input type="submit" value="Modifier" />
    </div>
</form>
  
<?php $content = ob_get_clean(); ?>
  
<?php require('template.php'); ?>