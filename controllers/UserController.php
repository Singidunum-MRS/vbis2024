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
        $model->one("where user_id = 1");

        //$model->all("");

        /*echo "<pre>";
        var_dump($model);
        exit;*/



        $this->view->render("getUser", "main", $model);
    }

    public function readAll()
    {


        $model = new UserModel();

        $result = $model->all("");


        /*echo "<pre>";
        var_dump($model);
        exit;*/


        $this->view->render("users", "main", $result);
    }

    public function updateUser()
    {


        $model = new UserModel();

        $model->mapData($_GET);
        $model->one("where user_id = $model->user_id");

        /*var_dump($model);
        exit;*/

        $this->view->render("updateUser", "main", $model);
    }

    public function processUpdateUser()
    {


        $model = new UserModel();

        $model->mapData($_POST);

        $model->update("where user_id = $model->user_id");

        header("Location:" . "/users");
    }
}