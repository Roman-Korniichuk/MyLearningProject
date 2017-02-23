<?php

include __DIR__ . '/autoload.php';

$page = new \App\View();
$articles = App\Models\Article::getAll();
$page->assign('news', $articles);
$page->display(__DIR__ . '/Templates/index_template.php');
