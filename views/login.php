<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | MyRSS</title>
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>


    <div class="top-bar">
        <p>MyRSS</p>

        <div style="width: 25vw;"></div>

        <div class="login">
            <span>Pas de compte?</span>
            <a href="inscription">Inscrivez vous</a>
        </div>
    </div>


    <form method="post">

        <h2>Re-bonjour</h2>

        <input type="email" placeholder="E-mail" name="email" required autocomplete="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        <?php if(!$user_existe_db) : ?>
            <p class="probleme-formulaire">
            Heureux de vous rencontrer ! Cet e-mail n'existe pas dans notre système. <a href="inscription">Vous souhaitez créer un compte ?</a>
            </p>
        <?php endif; ?>

        <input type="password" placeholder="Password" name="password" required minlength="8" maxlength="" autocomplete="current-password">

        <?php if ($user_invalid_password) : ?>
            <p class="probleme-formulaire">
            Mot de passe incorrect. Vous l'avez oublié?&nbsp;<a href="reset-mdp">Vous pouvez le réinitialiser ici.</a>
            </p>
        <?php endif; ?>

        <input type="submit" value="Connexion">

        <p onclick="window.alert('Pas encore disponible. Veuillez nous contacter à myrss@gatiendev.fr')">Mot de passe oublié?</p>

    </form>




</body>

</html>