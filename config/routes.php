<?php

/** @var \PHPFrw\Application $app */

use App\Controllers\HomeController;
use App\Controllers\AjaxController;

$app->router->get('/law', [HomeController::class, 'law']);
$app->router->get('/works', [HomeController::class, 'works']);
$app->router->get('/service', [HomeController::class, 'service']);
$app->router->get('/procedure', [HomeController::class, 'procedure']);
$app->router->get('/ajaxRequest', [HomeController::class, 'ajaxRequest']);
$app->router->get('/contacts', [HomeController::class, 'contacts']);

$app->router->get('/allWorks', [AjaxController::class, 'allWorks']);
$app->router->get('/loadMore', [AjaxController::class, 'loadMore']);
$app->router->get('/worksByCategoryId', [AjaxController::class, 'worksByCategoryId']);
$app->router->get('/', [HomeController::class, 'index']);


//$app->router->get('/clearImage', function (){
//    $y = 0;
//    $n = 0;
//    try {
//        $iterator = new RecursiveIteratorIterator(
//            new RecursiveDirectoryIterator(IMAGES.'/works/', RecursiveDirectoryIterator::SKIP_DOTS)
//        );
//
//        foreach ($iterator as $file) {
//            if ($file->isFile()) {
//                $fileName = $file->getFilename();
//
////                dump($fileName);
//                $res = db()->query("select * from works where photoName like CONCAT('%', :photoName)", ['photoName' => $fileName])->get();
//                if (!$res) {
//                    print_r("имя файла `$fileName` нету в таблице mysql.<br>");
//                    $n++;
//                    @unlink($file->getPathname());
//                } else {
//                    $y++;
//                    print_r("имя файла: `$fileName` есть в таблице mysql.<br>");
//                }
//            }
//        }
//        dump($y);
//        dd($n);
//    } catch (Exception $e) {
//        echo "Ошибка при чтении директории: " . $e->getMessage();
//    }
//});


