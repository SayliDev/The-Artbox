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
<!-- appelle du header -->
<?php include('header.php'); ?>
<!-- appelle des infos oeuvre -->
<?php include('oeuvres.php'); ?>
<main>
    <div id="liste-oeuvres">
        <!-- La boucle foreach parcourt chaque élément du tableau $oeuvres un par un et le stocke dans la variable $oeuvre. -->
        <?php foreach ($oeuvres as $oeuvre) { ?>
            <article class="oeuvre">
                <!-- Pour chaque oeuvre, crée un lien vers la page détaillée (oeuvre.php) en incluant l'identifiant de l'oeuvre dans l'URL. -->
                <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                    <!-- Affiche l'image de l'oeuvre avec le chemin spécifié dans le tableau d'oeuvres. -->
                    <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                    <!-- Affiche le titre de l'oeuvre. -->
                    <h2><?php echo $oeuvre['titre']; ?></h2>
                    <!-- Affiche la description courte de l'oeuvre. -->
                    <p class="description"><?php echo $oeuvre['description']; ?></p>
                </a>
            </article>
        <?php } ?>
    </div>
</main>
<!-- appelle du footer -->
    <?php include('footer.php'); ?>
</body>
</html>




