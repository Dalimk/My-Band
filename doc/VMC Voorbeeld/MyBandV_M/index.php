<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
include 'views/head.php';

// header
include 'views/header.php';

// menu
include 'views/menu.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        include 'views/home.php';
        break;
    case 'agenda':
        include 'views/agenda.php';
        break;
    case 'programmering':
        include 'views/programmering.php';
        break;
    // case 'djot':
    //     include 'views/djot.php';
    //     break;
    case 'live':
        include 'views/live.php';
        break;
    case 'about':
        include 'views/about.php';
        break;
    case 'contact':
        include 'views/contact.php';
        break;
}

include 'views/footer.php';

?>
