<?php
//insertion du model PHP
include '../model/clients.php';
//insertion du controller PHP
include '../controller/index.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="PDO Partie 1 exercice 5">
        <meta name="author" content="Leveque Matthieu">
        <title>PDO Partie 1 exercice 5</title>
        <!-- main core CSS -->
        <link href="assets/css/main.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bgMatt">
                    <h1>PDO Partie 1 exercice 5</h1>
                    <p><strong>Consigne</strong>:Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci :</p>
                    <ul>
                        <li>Nom : Nom du client</li>
                        <li>Prénom : Prénom du client</li>
                    </ul>
                    <p>Trier les noms par ordre alphabétique.</p>
                </div>
            </div>
            <hr>
            <div class="row">      
                <div class="col-md-12 bgMatt">
                    <h1>Résultat:</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénoms</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                foreach ($clientListM as $client){?>
                            <tr>
                                <td>Nom: <?= $client->lastName ?></td>
                                <td>Prénom: <?= $client->firstName ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <footer>
            </footer>
    </body>
</html>