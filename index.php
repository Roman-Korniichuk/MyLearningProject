<?php

include __DIR__ . '/autoload.php';

//$page = new \App\View();
//$news = new \App\Models\News;
//$page->news = $news->getLastNews();
//$page->assign('news', $articles);
//$page->display(__DIR__ . '/Templates/index_template.php');
$act = $_GET['act'] ?: 'Index';
try {
$action = new App\Controllers\News;
$action->action($act);
} catch (\App\Exceptions\Db $e) {
    echo $e->getMessage();
    die;
}