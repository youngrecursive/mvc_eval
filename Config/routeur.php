<?php

use App\Controller\DefautController;


if (!empty($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "home";
}

switch ($page) {
    case 'home':
        $home = new DefautController();
        $home->home();
        break;
}
