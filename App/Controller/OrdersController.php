<?php
namespace App\Controller;


use App\Model\OrdersModel;
use Core\Controller\Controller;


class OrdersController extends Controller{


    public function orders()
    {

      $orderModel = new OrdersModel();

        $orders = $orderModel->readAll();
        $this->render("orders", ["orders" => $orders]);
    }

}