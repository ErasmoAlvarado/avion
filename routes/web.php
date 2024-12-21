<?php

use app\Controllers\AuthController;
use Lib\Route;

$router = new Route();

$router->get("avion/public",function ()  {
    echo AuthController::loginView([
        "title" => "home"
    ]);
});
$router->get("avion.test/",function ()  {
    echo AuthController::loginView([
        "title" => "home"
    ]);
});

$router->get("avion/public/register",function ()  {
    echo AuthController::RegisterView([
        "title" => "home"
    ]);
});

$router->post("avion/public/register",function ()  {
    echo AuthController::register($_POST);
});


$router->display();