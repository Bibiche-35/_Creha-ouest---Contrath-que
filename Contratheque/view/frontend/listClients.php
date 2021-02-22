<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Pouzy Book !</h1>
            <p class="lead">La bibliothèque complète des administrés :</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
<!-- Ceci est mis enc ommentaire mais pourra être réutilisé par la suite           
                <a href="index.php?order=name" class="btn btn-primary">Trier par nom</a>&nbsp;
                <a href="index.php?order=author" class="btn btn-info">Trier par auteur</a>&nbsp;
                <a href="index.php" class="btn btn-dark">Annuler le tri</a><br>              
                <br> 
-->  
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Siret</th>
                        <th scope="col">Dénomination</th>
                        <th scope="col">Adresse_1</th>
                        <th scope="col">Adresse_2</th>
                        <th scope="col">Adresse_3</th>
                        <th scope="col">BP_CS</th>
                        <th scope="col">Code Postal</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Site Internet</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody>                 
                    <?php   
                        while ($data = $posts->fetch()) { 
                    ?> 
                        <tr>   
                            <td><a href="index.php?action=livre&amp;id=<?= $data['siret_client'] ?>">Voir</a></td>
                            <td><?php echo $data['denomination_client'] ;?></td>
                            <td><?= $data['adresse1_siege'];?> </td>
                            <td><?= $data['adresse2_siege'];?></td>
                            <td><?= $data['adresse3_siege'];?></td>
                            <td><?= $data['BP_CS_siege'];?> </td>
                            <td><?= $data['code_postal_siege'];?></td>
                            <td><?= $data['ville_siege'];?></td>
                            <td><?= $data['pays_siege'];?> </td>
                            <td><?= $data['site_internet_siege'];?></td>
                            <td><?= $data['email_siege'];?></td>
                        </tr>
                    <?php 
                        } 
                    ?>  
                </tbody>
                </table>
            </div>
        </div>
<?php
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>