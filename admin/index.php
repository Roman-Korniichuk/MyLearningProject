<?php

include __DIR__ . '/../autoload.php';

/*$articles = App\Models\Article::getAll();

$page = new \App\View();
//$page->assign('articles', $articles);
$page->articles = $articles;
$page->display(__DIR__ . '/../Templates/admin_template.php');
//echo 'Here will be admin-panel, protected by .htaccess';
 */

$act = $_GET['act'] ?: 'Index';
$action = new App\Controllers\Admin;
$action->action($act);