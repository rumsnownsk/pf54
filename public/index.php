<?php

require_once "../vendor/autoload.php";

require_once __DIR__."/../config/config.php";
require_once __DIR__."/../helpers/helpers.php";

$app = new \PHPFrw\Application();
require_once CONFIG.'/routes.php';

$app->run();