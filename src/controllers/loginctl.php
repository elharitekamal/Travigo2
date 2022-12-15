<?php


class loginctl
{
    public function login()
    {
        require('view/login.php');
    }

}



$home = new loginctl();
$home->login();


?>