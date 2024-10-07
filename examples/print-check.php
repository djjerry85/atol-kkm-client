<?php
ini_set('display_errors', 'On');
//phpinfo();

require './../vendor/autoload.php';

require 'DishStickerCheck.php';
require 'ClientMainCheck.php';

//$chek = new ClientMainCheck();

//dump($chek->createCommand());



$client = new KKMClient\Client(
    'http://localhost:5893/Execute',
    [
        'user' => 'Admin',
        'pass' => ''
    ]
);


try {
    //$chek = new DishStickerCheck();
    $chek = new ClientMainCheck();

    dump($client->executeCommand($chek->createCommand()));
} catch (\KKMClient\Exceptions\CheckIsNotPrintable $e) {
    dump($e);
}



