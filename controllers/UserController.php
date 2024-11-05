<?php
namespace app\controllers;

use app\core\BaseController;
use app\core\DbConnection;
use app\core\view;
use app\models\UserModel;

class UserController extends BaseController
{
   /* public function userCreate() {
        return "User created";
    }*/

    public function readUser()
    {


        $model = new UserModel();
        $result = $model->get();
        $model->mapData($result);


        echo $this->view->render("getUser", "main", $model);
    }
}