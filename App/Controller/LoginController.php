<?php
namespace App\Controller;


use App\Model\LoginModel;
use Core\Controller\Controller;


class LoginController extends Controller{


    public function login()
    {

      $LoginModel = new LoginModel();
      $this->render("login");
    }

}
