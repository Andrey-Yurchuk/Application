<?php

declare(strict_types=1);

namespace Application;

use Exception;
use Application\Database\Databaseconnection;
use Application\Products\Iphone;

spl_autoload_register(function ($class) {
    $a = array_slice(explode('\\', $class), 1);
    if (!$a) {
        throw new Exception();
    }
    $filename = implode('/', [__DIR__, ...$a]) . '.php';
    require_once $filename;
});

$pdo = Databaseconnection::getInstance();

$iphone = new Iphone($pdo);
$iphone->getEntityFromAPI();
exit('OK');






