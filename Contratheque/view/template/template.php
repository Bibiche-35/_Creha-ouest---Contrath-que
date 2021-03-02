<!-- On va créer un template (aussi appelé gabarit) de page. -->
<!-- On va y retrouver toute la structure de la page, avec des "trous" à remplir. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="../contratheque/public/CSS/style.css" rel="stylesheet" />         
    </head>
        
    <body>
    <?php include 'header.php'; ?>
    <?= $content ?>
    <?php include 'footer.php'; ?>
    </body>
</html>