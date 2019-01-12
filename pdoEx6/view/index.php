<?php
//insertion du model PHP
include '../model/showType.php';
//insertion du controller PHP
include '../controller/index.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="PDO Partie 1 exercice 6">
        <meta name="author" content="Leveque Matthieu">
        <title>PDO Partie 1 exercice 6</title>
        <!-- main core CSS -->
        <link href="assets/css/main.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bgMatt">
                    <h1>PDO Partie 1 exercice 6</h1>
                    <p><strong>Consigne</strong>:Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p>           
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
                                <th>Titre / Artiste</th>
                                <th>Date / Heure début</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                foreach ($showList as $show){?>
                            <tr>
                                <td><?= $show->id ?></td>
                                <td><?= $show->title ?> par <?= $show->performer ?></td>
                                <td>Le <?= $show->date ?> à <?= $show->startTime ?></td>
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