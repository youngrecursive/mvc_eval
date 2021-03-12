<?php
namespace App\Controller;


use App\Model\CustomersModel;
use Core\Controller\Controller;


class CustomerController extends Controller{


    public function customer()
    {

      $customerModel = new CustomersModel();

        $customers = $customerModel->readAll();
        $this->render("customer", ["customers" => $customers]);
    }

}
