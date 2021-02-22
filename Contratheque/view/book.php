<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ma bibliothèque d'amour</title>
  </head>
  <body>
    <main class="container">
        <div class="jumbotron">
            <h1 class="display-4">Mes livres à moi</h1>
            <p class="lead">C'est moi qui l'ai fait je suis trop contente</p>
        </div>
        <h1></h1>
        <div class="row">
            <div class="col-12 col-md-8">
                <a href="index.php?order=name" class="btn btn-primary">Trier par nom</a>&nbsp;
                <a href="index.php?order=author" class="btn btn-info">Trier par auteur</a>&nbsp;
                <!-- TODO #2 n'afficher ce bouton que s'il y a un tri -->
                <?php if (isset($_GET['order'])) :?>
                <a href="index.php" class="btn btn-dark">Annuler le tri</a><br>              
                <?php endif ;?>
                <br>
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
                    <!-- TODO #1 boucler sur le tableau $bookList contenant tous les livres
                    (supprimez ces 2 lignes d'exemple) -->
                    <?php foreach($BookList as $book) :?>  
                        <tr>
                            <td><a href="index.php?action=livre&amp;id=<?= $book['siret_client'] ?>">Voir</a></td>
                            <td><?php echo $book['denomination_client'] ;?></td>
                            <td><?= $book['adresse1_siege'];?> </td>
                            <td><?= $book['adresse2_siege'];?></td>
                            <td><?= $book['adresse3_siege'];?></td>
                            <td><?= $book['BP_CS_siege'];?> </td>
                            <td><?= $book['code_postal_siege'];?></td>
                            <td><?= $book['ville_siege'];?></td>
                            <td><?= $book['pays_siege'];?> </td>
                            <td><?= $book['site_internet_siege'];?></td>
                            <td><?= $book['email_siege'];?></td>
                        </tr>
                    <?php endforeach ?>  
                </tbody>
                </table>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">Ajout</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="author">Auteur</label>
                                <input type="text" class="form-control" name="author" id="author" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="release_date">Date de publication</label>
                                <input type="text" class="form-control" name="release_date" id="release_date" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <select class="custoGenre" id="genre" name="genre">
                                    <option>-<?php foreach ($genreList as $currentGenreId=>$currentGenreName) : ?>
                                    <option value="<?= $currentGenreId ?>"><?= $currentGenreName ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
