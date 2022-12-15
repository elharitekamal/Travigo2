<?php
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'index':
            require 'src/controllers/indexctl.php';
            break;
        case 'tours':
            require 'src/controllers/toursctl.php';
            break;
        case 'about':
            require 'src/controllers/aboutctl.php';
            break;
        case 'contactus':
            require 'src/controllers/contactusctl.php';
            break;
        case 'addtours':
            require 'src/controllers/addtourctl.php';
            break;
        case 'edittour':
            require 'src/controllers/edittourctl.php';
            break;
        case 'dash':
            require 'src/controllers/dashctl.php';
            break;
        case 'login':
            require 'src/controllers/loginctl.php';
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                // $element = $_GET['id'];
                require 'src/controllers/deletectl.php';
            }
            break;

    }

} else {
    require 'src/controllers/indexctl.php';
}