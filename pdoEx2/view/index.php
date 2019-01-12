<?php
//insertion du model PHP
include '../model/showType.php';
//insertion du controller PHP
include '../controller/index.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="PDO Partie 1 exercice 2"/>
        <meta name="author" content="Leveque Matthieu"/>
        <title>PDO Partie 1 exercice 2</title>
        <!-- main core CSS -->
        <link href="assets/css/main.css" rel="stylesheet"/>
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 bgMatt">
                    <h1>PDO Partie 1 exercice 2</h1>
                    <p><strong>Consigne</strong>:Afficher tous les types de spectacles possibles.</p>           
                </div>
            </div>
            <hr/>
            <div class="row">      
                <div class="col-md-12 bgMatt">
                    <h2>Résultat:</h2>
                    <select id="showList" name="showList">
                        <?php foreach ($showList as $show){ ?>
                        <option value="<?= $show->id ?>"><?= $show->type ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </body>
</html>