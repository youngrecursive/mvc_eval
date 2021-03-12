<?php
namespace App\Controller;


use App\Model\ProductsModel;
use Core\Controller\Controller;


class ProductsController extends Controller{


    public function products()
    {

      $productModel = new ProductsModel();

        $products = $productModel->readAll();
        $this->render("products", ["products" => $products]);
    }

}