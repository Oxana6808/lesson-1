<?php

namespace web;
use App\router\Route;

require_once "../vendor/autoload.php";

$router = new Route;
$router->callController();