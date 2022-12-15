<?php


class contactusctl
{
    public function contactus()
    {
        require('view/contactus.php');
    }

}



$home = new contactusctl();
$home->contactus();


?>