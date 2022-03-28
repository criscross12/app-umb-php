<?php

$router = new \Bramus\Router\Router();
session_start();

$router->get('/', function(){
    echo "Inicio del proyecto";
});

$router->run();