<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include('header.php'); ?>
<?php include('oeuvres.php'); ?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">

        </div>
        <div id="contenu-oeuvre">
            <!-- Affiche le titre de l'oeuvre. -->
            <h1><?php echo $oeuvre['titre']; ?></h1>
            <!-- Affiche la description courte de l'oeuvre. -->
            <p class="description"><?php echo $oeuvre['description']; ?></p>
            <!-- Affiche la description complète de l'oeuvre. -->
            <p class="description-complete"><?php echo $oeuvre['description-complete']; ?></p>
        </div>
    </article>
</main>
<?php include('footer.php'); ?>
</body>
</html>
