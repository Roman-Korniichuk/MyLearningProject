<?php

include __DIR__ . '/autoload.php';

$act = $_GET['act'] ?: 'Index';
try {
$action = new App\Controllers\News;
$action->action($act);
} catch (\App\Exceptions\Db $e) {
    echo $e->getMessage();
    die;
}