<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\ProductModel;
use app\models\UserModel;

class ProductController extends BaseController
{
    public function products()
    {


        $model = new ProductModel();

        $result = $model->all("");


        /*echo "<pre>";
        var_dump($model);
        exit;*/


        $this->view->render("products", "main", $result);
    }

    public function update()
    {


        $model = new ProductModel();

        $model->mapData($_GET);
        $model->one("where id = $model->id");

        /*var_dump($model);
        exit;*/

        $this->view->render("updateProduct", "main", $model);
    }

    public function processUpdate()
    {


        $model = new ProductModel();

        $model->mapData($_POST);

        $model->update("where id = $model->id");

        header("Location:" . "/products");
    }

}