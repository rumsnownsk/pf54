<?php

require_once "../vendor/autoload.php";

require_once __DIR__."/../config/config.php";
require_once __DIR__."/../helpers/helpers.php";

$whoops = new \Whoops\Run;
if (APP_DEBUG) {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler())->register();
} else {
    $whoops->pushHandler(new \Whoops\Handler\CallbackHandler(function (Throwable $e){
        error_log(
            PHP_EOL."______ [" . date('Y-m-d H:i:s'). "]______"
            . PHP_EOL."  Error: {$e->getMessage()};"
            . PHP_EOL."  File: {$e->getFile()};"
            . PHP_EOL. "  Line: {$e->getLine()};",3, ERROR_LOGS);
        abort('Some error', 500);
    }))->register();
}
$whoops->register();


$app = new \PHPFrw\Application();
require_once CONFIG.'/routes.php';

$app->run();





//dump( "Time_code: ". microtime(true)-$start_fr);

?>