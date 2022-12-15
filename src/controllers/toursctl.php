<?php


include('model/tours.php');


$tours = new tours();
$rows = $tours->afficher();

require('view/tours.php');


?>