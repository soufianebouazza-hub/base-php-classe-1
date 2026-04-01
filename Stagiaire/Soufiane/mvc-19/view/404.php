<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Développeur PHP/React | Erreur 404</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <?php
        // Structure commune pour garder la meme mise en page.
        include 'inc/navbar.php';
        ?>
    </header>

    <main>
        <!-- Affichee quand la page demandee n'existe pas dans la liste blanche -->
        <section style="text-align: center; margin-top: 10vh;">
            <h1>Erreur_404</h1>
            <p>retour a lacceuil <a href="./">cliquer ici</a></p>
        </section>
    </main>

    <footer>
        <?php 
        // Footer partage.
        include 'inc/footer.php';
        ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
