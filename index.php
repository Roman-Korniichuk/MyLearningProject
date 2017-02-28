<?php

include __DIR__ . '/autoload.php';

$page = new \App\View();
$news = new \App\Models\News;
$page->news = $news->getLastNews();
//$page->assign('news', $articles);
$page->display(__DIR__ . '/Templates/index_template.php');
