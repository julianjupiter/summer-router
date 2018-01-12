<?php

include_once(__DIR__ . '/../../SummerRouter.php');
include_once(__DIR__ . '/Controller/HiWorldController.php');

$app = new SummerRouter\SummerRouter();
$app->addRoute('GET', '/hello-world', 'HelloWorldController', 'index');
$app->addRoute('GET', '/hi-world', 'Controller\HiWorldController', 'index');
$app->run();

class HelloWorldController
{
    public function index()
    {
        echo "Hello, world!";
    }
}