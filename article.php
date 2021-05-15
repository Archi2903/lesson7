<?php

require_once  __DIR__ . '/classes/View.php';
require_once  __DIR__ . '/classes/Article.php';

$article=new Article(__DIR__ . 'baseNews.txt',$_GET['id']);

$view = new View();

$view->assign('article1.php',$article);
$view->display('article1.php');
