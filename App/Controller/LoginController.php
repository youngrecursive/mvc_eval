<?php
namespace App\Controller;


use App\Model\LoginModel;
use Core\Controller\Controller;


class LoginController extends Controller{


    public function login()
    {

      $LoginModel = new LoginModel();
      $LoginModel->SelectLogin();
      

      $this->render("login");
    }

}
