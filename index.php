<?php

$database = require 'core/bootstrap.php';




require Router::load('routes.php')
    ->direct(Request::uri());
// $router = Router::load('routes.php');
// require $router->direct($uri);
