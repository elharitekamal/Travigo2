<?php


class aboutctl
{
    public function about()
    {
        require('view/about.php');
    }

}



$home = new aboutctl();
$home->about();


?>