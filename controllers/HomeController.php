<?php

namespace app\controllers;

use app\core\BaseController;
use app\core\View;

class HomeController extends BaseController
{

    public function home()
    {
        echo $this->view->render("home", "main", null);
    }

    public function about()
    {
        echo $this->view->render("home", "main", null);
    }
}