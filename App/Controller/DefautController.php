<?php
namespace App\Controller;

use Core\Controller\Controller;


class DefautController extends Controller{


    public function home()
    {
        $this->render("home");
    }

}
