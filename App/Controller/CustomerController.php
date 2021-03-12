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

    public function detailCustomer()
    {
      $detailcustomerModel = new CustomersModel();

        if(!empty($_GET['id'])){
          $id = $_GET['id'];
        }
        else {
          die('404');
        }
        $payments = $detailcustomerModel->jointurecustomer($id);
        $this->render("detailcustomer", ["payments" => $payments]);
    }

}
