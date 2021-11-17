<?php
session_start();

use App\Core\{Router, Request};

require '../vendor/autoload.php';
require '../functions.php';
require '../core/bootstrap.php';

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
