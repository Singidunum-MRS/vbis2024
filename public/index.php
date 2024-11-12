<?php

require_once  __DIR__ . '/../vendor/autoload.php';

use app\controllers\UserController;
use app\controllers\HomeController;
use app\controllers\ProductController;
use app\core\Application;


$app = new Application();


$app->router->get("/getUser", [UserController::class, 'readUser']);
$app->router->get("/users", [UserController::class, 'readAll']);
$app->router->get("/products", [ProductController::class, 'products']);
$app->router->get("/updateUser", [UserController::class, 'updateUser']);
$app->router->get("/updateProduct", [ProductController::class, 'update']);
$app->router->post("/processUpdateUser", [UserController::class, 'processUpdateUser']);
$app->router->post("/processUpdateProduct", [ProductController::class, 'processUpdate']);
$app->router->get("/", [UserController::class, 'home']);


$app -> run();