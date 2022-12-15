<?php


class addtourctl
{
    public function addtour()
    {
        require('view/addtour.php');
    }

}



$home = new addtourctl();
$home->addtour();


?>