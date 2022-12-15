<?php
include('model/tours.php');

class deletctl extends tours
{
    public function supp()
    {
        $this->delete($_GET['id']);
        // $del = new tours();
        // $result = $del->delete($element);
        require('view/dash.php');
    }

}


$objet = new tours();
$objet->delete($_GET['id']);
$home = new deletctl();
$home->supp();


?>