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
        <meta name="description" content="PDO Partie 1 exercice 1">
        <meta name="author" content="Leveque Matthieu">
        <title>PDO Partie 1 exercice 1</title>
        <!-- main core CSS -->
        <link href="assets/css/main.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bgMatt">
                    <h1>PDO Partie 1 exercice 1</h1>
                    <p><strong>Consigne</strong>:Afficher tous les clients.</p>           
                </div>
            </div>
            <hr>
            <div class="row">      
                <div class="col-md-12 bgMatt">
                    <h1>Résultat:</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Prénoms</th>
                                <th>Date de naissance</th>
                                <th>Carte de fidélité</th>
                                <th>Numéro de carte</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                foreach ($clientList as $client){?>
                            <tr>
                                <td><?= $client->id ?></td>
                                <td><?= $client->lastName ?></td>
                                <td><?= $client->firstName ?></td>
                                <td><?= $client->birthDate ?></td>
                                <td><?= $client->card ?></td>
                                <td><?= $client->cardNumber ?></td>
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