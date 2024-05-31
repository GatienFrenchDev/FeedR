<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyRSS</title>

    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="css/article-reader.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/context-menu.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/onglet.css">
    <link rel="stylesheet" href="css/side-bar.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/lib/moment.js" defer></script>

    <script src="js/classes/API.js" defer></script>
    <script src="js/classes/Arborescence.js" defer></script>
    <script src="js/classes/ArticleReader.js" defer></script>
    <script src="js/classes/Article.js" defer></script>
    <script src="js/classes/BoutonAjoutDossier.js" defer></script>
    <script src="js/classes/BoutonAjoutFavoris.js" defer></script>
    <script src="js/classes/BoutonAjoutFlux.js" defer></script>
    <script src="js/classes/BoutonAjoutCollection.js" defer></script>
    <script src="js/classes/BoutonArticleTraite.js" defer></script>
    <script src="js/classes/Categorie.js" defer></script>
    <script src="js/classes/Collection.js" defer></script>
    <script src="js/classes/ContainerArticle.js" defer></script>
    <script src="js/classes/ContextMenu.js" defer></script>
    <script src="js/classes/Espace.js" defer></script>
    <script src="js/classes/FluxRSS.js" defer></script>
    <script src="js/classes/Header.js" defer></script>
    <script src="js/classes/BoutonAfficherCollections.js" defer></script>
    <script src="js/classes/CollectionItem.js" defer></script>
    <script src="js/classes/Tools.js" defer></script>

    <script src="js/collections.js" defer></script>
</head>

<body>

    <div id="context-menu">
    </div>

    <?php
    createSideBar(4);
    ?>

    <div class="onglet">

        <div class="top">
            <img src="/docs/img/logo_troover.svg" height="35" alt="logo troover">
        </div>

        <div id="arborescence">

        </div>

        <div class="ajout-dossier">
            <span>
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon small" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5V19M5 12H19" stroke="#A3A3A3" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                </svg>
            </span>

            <p>Ajouter</p>
        </div>

    </div>

    <div class="articles">

        <div class="article-header">
            <span>
                Tous les posts
            </span>
        </div>

        <div id="container-articles">
        </div>

    </div>

    <div id="article-reader">
    </div>

</body>

</html>
