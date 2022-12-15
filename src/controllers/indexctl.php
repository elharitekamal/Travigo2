<?php


class indexctl
{
    public function index()
    {
        require('view/index.php');
    }

}



$home = new indexctl();
$home->index();


?>