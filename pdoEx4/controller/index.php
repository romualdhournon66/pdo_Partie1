<?php
//instenciation de l'objet clients 
//$client devient une instance de la classe client
//la methode magique Construct est appelée automatiquement grâce au mot clé new
$clients = new clients();
$clientListCardFidelity = $clients->getClientListCardFidelity();
?>