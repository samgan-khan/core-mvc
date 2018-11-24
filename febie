<?php
include ('Core/Nucleus/Initializer.php');

use Core\Nucleus\Initializer;
$initializer = new Initializer();

if (isset($argv[1])) {
    switch ($argv[1]) {

        case 'server':
            $initializer->server();
            break;

        case 'version':
            $initializer->version();
            break;

        default:
            echo 'welcome to febie, it\'s simple and elegant.';
            break;

    }
} else {
    echo 'welcome to febie, it\'s simple and elegant.';
}

