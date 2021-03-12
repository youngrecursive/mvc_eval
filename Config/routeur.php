<?php

use App\Controller\DefautController;
use App\Controller\CustomerController;
use App\Controller\LoginController;


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
    case 'login':
        $login = new LoginController();
        $login->login();
        break;
}
