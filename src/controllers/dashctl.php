<?php

include('model/tours.php');
class dashctl
{
    public function dash()
    {
        $dash = new tours;
        $tours = $dash->afficher();

        require('view/dash.php');
    }

}



$home = new dashctl();
$home->dash();


?>