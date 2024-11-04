<?php
namespace app\controllers;

use app\core\BaseController;
use app\core\view;
use app\models\UserModel;

class UserController extends BaseController
{
    public function userCreate() {
        return "User created";
    }

    public function readUser()
    {
        $model = new UserModel();
        $model->email = "oilic@singidunum.ac.rs";
        $model->firstName = "Ognjen";
        $model->lastName = "Ilic";

        echo $this->view->render("getUser", "main", $model);
    }
}