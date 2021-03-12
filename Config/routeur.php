<?php

use App\Controller\DefautController;
use App\Controller\CustomerController;
use App\Controller\ProductsController;
use App\Controller\OrdersController;


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
    case 'products':
        $products = new ProductsController();
        $products->products();
        break;
    case 'orders':
        $orders = new OrdersController();
        $orders->orders();
        break;
}
