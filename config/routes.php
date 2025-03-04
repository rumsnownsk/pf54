<?php

/** @var \PHPFrw\Application $app */

use App\Controllers\HomeController;
use App\Controllers\UserController;

const MIDDLEWARE = [
    'auth' => \PHPFrw\Middleware\Auth::class,
    'guest' => \PHPFrw\Middleware\Guest::class,
];


$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/law', [HomeController::class, 'law']);
$app->router->get('/service', [HomeController::class, 'service']);
//$app->router->get('/priceService', [HomeController::class, 'priceService']);
//$app->router->post('/priceCalculate', [HomeController::class, 'priceCalculate']);
$app->router->get('/procedure', [HomeController::class, 'procedure']);
$app->router->get('/ajaxRequest', [HomeController::class, 'ajaxRequest']);
$app->router->get('/contacts', [HomeController::class, 'contacts']);

$app->router->get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth']);

$app->router->get('/register', [UserController::class, 'register'])->middleware(['guest']);


$app->router->get('/users', [UserController::class, 'index']);
$app->router->post('/register', [UserController::class, 'store'])->middleware(['guest']);
$app->router->get('/login', [UserController::class, 'login'])->middleware(['guest']);

//$app->router->get('/contact/', [\App\Controllers\HomeController::class, 'contact']);
//$app->router->get('/post/(?P<slug>[a-z0-9-]+)/?', function (){
//    return '<p>Some post</p>';
//});



//dump($app->router->getRoutes());

