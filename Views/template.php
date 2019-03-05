<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Tchat PHP créé dans un but pédagogique.">
        <meta property="og:title" content="Tchat PHP">
        <meta name="robots" content="index,follow" />
        <meta name="Author" content="Yohan CHEVROT" />
        <meta name="theme-color" content="#ADD8E6">
        <meta property="og:title" content="Tchat PHP" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Tchat PHP créé dans un but pédagogique." />
        <meta property="og:url" content="https://www.yohan-chevrot/demos/Tchat_PHP" />
        <meta property="og:image" content="http://yohan-chevrot.fr/demos/Tchat_PHP/src/img/background.jpg" />
        <link rel="shortcut icon" type="image/png" href="./src/img/favicon.png" />
        <!-- Titre dynamique -->
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="./src/css/style.css">
    </head>
    <!-- BODY -->
    <body>
        <!-- Contenu du template généré dynamiquement en PHP via ob_start() -->
        <?= $content ?>
        <!-- FOOTER -->
        <footer>
            <p><a href="mailto:dynzels@gmail.com">Yohan CHEVROT</a> &copy; 2018 - 2019</p>
        </footer>
    </body>
</html>
