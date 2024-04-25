<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css"><link rel="stylesheet" href="css/footer.css">
    <title>FindMyDreamHome.com</title>
</head>
<body>
<?php require "./_partials/_navbar.php";?>

    <main>
    <section class="card">
        <?php
        include "./_partials/_table.php";
        foreach ($cards as $card) {
            include "./_partials/_card.php";
        }
        // for ($i = 0;$i <4 && $i <count($cards);$i++) {
        // $card = $cards[$i];
        // include "_card.php";
        // }
        ?>
    </section>
    </main>

   <?php require_once "./_partials/_footer.php";?>


</body>

</html>





<!-- Todo:
Ajouter un bouton login dans le header qui renvoie vers la page de connexion.

Créer une nouvelle page, qui contient un formulaire de connexion (email, password).

Enregistrer en session le tableau des annonces.

Le formulaire de création d'annonce doit ajouter dans le tableau d'annonces qui se trouve en sessions l'annonce que la personne a créer.

Un bouton Add dans le header qui redirige vers la page d'ajout d'annonce.

Une nouvelle page logout qui détruit la session. -->