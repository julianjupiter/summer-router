<?php

include_once(__DIR__ . '/../SummerRouter.php');

$app = new SummerRouter\SummerRouter();
$app->addRoute('GET', '/hello-world', 'HelloWorldController', 'index');
$app->run();