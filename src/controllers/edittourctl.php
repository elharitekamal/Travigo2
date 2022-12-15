<?php


class edittourctl
{
    public function edit()
    {
        require('view/edittour.php');
    }

}



$home = new edittourctl();
$home->edit();


?>