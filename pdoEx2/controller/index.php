<?php
//instenciation de l'objet spectacles 
//$showType devient une instance de la classe showType
//la methode magique Construct est appelée automatiquement grâce au mot clé new
$showType = new showType();
$showList = $showType->getShowType();
?>