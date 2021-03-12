<?php

use App\Controller\DefautController;
use App\Controller\CustomerController;


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
    case 'customer':
        $customer = new CustomerController();
        $customer->customer();
        break;
}
