<?php
ini_set('display_errors', 'On');
//phpinfo();

require './../vendor/autoload.php';

require 'DishStickerCheck.php';
require 'ClientMainCheck.php';



$command = new \KKMClient\Models\Queries\Commands\RegisterCheck();
$command->setSubLicensingKey('faktcrm@yandex.ru', '12345678', 'best-client');


//$client = new KKMClient\Client(
//    'http://localhost:5893/Execute',
//    [
//        'user' => 'Admin',
//        'pass' => ''
//    ]
//);
//
//$client->executeCommand($command);


//try {
//    //$chek = new DishStickerCheck();
//    $chek = new ClientMainCheck();
//
//    dump($client->executeCommand($chek->createCommand()));
//} catch (\KKMClient\Exceptions\CheckIsNotPrintable $e) {
//    dump($e);
//}



