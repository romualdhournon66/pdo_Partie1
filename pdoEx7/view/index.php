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
        <meta name="description" content="PDO Partie 1 exercice 7">
        <meta name="author" content="Leveque Matthieu">
        <title>PDO Partie 1 exercice 7</title>
        <!-- main core CSS -->
        <link href="assets/css/main.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bgMatt">
                    <h1>PDO Partie 1 exercice 7</h1>
                    <p><strong>Consigne</strong>:Afficher tous les clients comme ceci :</p>
                    <ul>
                        <li>Nom : Nom de famille du client</li>
                        <li>Prénom : Prénom du client</li>
                        <li>Date de naissance : Date de naissance du client</li>
                        <li>Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</li>
                        <li>Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</li>
                    </ul>
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
                                <td>Nom: <?= $client->lastName ?></td>
                                <td>Prénom: <?= $client->firstName ?></td>
                                <td>Date de Naissance: <?= $client->birthDate ?></td>
                                <td>Carte de fidélité: <?= $client->card ?></td>
                                <?php if ($client->cardNumber !=NULL): ?>
                                <td>Numéro de carte: <?= $client->cardNumber ?></td>
                               <?php endif; ?>
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