<!-- Ceci est la Vue de la page d'accueil. Elle affiche la page : Affichage -->
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<div class="jumbotron">
            <h1 class="display-4">Pouzy Book !</h1>
            <p class="lead">Le détail d'un livre sélectionné : Page d'emprunt</p>
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
                        <th scope="col">Détails</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Référence ISBN</th>
                        <th scope="col">Nbre pages</th>
                        <th scope="col">Editeur</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Année</th>
                        <th scope="col">Langue</th>
                        <th scope="col">Format</th>
                    </tr>
                </thead>
                <tbody>                 
                        <tr>   
                            <td><?php echo $postLivre['titre'] ;?></td>
                            <td><?= $postLivre['auteur'];?> </td>
                            <td><?= $postLivre['ref'];?></td>
                            <td><?= $postLivre['nbrPages'];?></td>
                            <td><?= $postLivre['edition'];?> </td>
                            <td><?= $postLivre['genre'];?></td>
                            <td><?= $postLivre['anneeEdition'];?></td>
                            <td><?= $postLivre['langue'];?> </td>
                            <td><?= $postLivre['format'];?></td>

                        </tr>
                </tbody>
                </table>
            </div>
        </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>