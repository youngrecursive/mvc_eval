<?php
namespace App\Controller;

use App\Model\ProductsModel;
use App\Model\CustomersModel;
use App\Model\OrdersModel;
use Core\Controller\Controller;


class DefautController extends Controller{


    public function home()
    {
      $productModel = new ProductsModel();
      $customerModel = new CustomersModel();
      $orderModel = new OrdersModel();

      $products = $productModel->readAll();
      $countproducts = $productModel->countProducts();
      $countCustomers = $customerModel->countCustomers();
      $countOrders = $orderModel->countOrders();
      $countOrdersSh = $orderModel->countOrdersSh();
      $countOrdersCan = $orderModel->countOrdersCan();

      $variable = 'michel';


        $this->render("home",["products" => $products, "countCustomers" => $countCustomers, "countProducts" => $countproducts, "countOrders" => $countOrders, "countOrdersSh" => $countOrdersSh, "countOrdersCan" => $countOrdersCan]);
    }

}
