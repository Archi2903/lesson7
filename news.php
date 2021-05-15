<?php
require_once __DIR__. '/classes/View.php';
require_once __DIR__. '/classes/News.php';

$news = new News(__DIR__ . 'baseNews.txt','note');

$view = new View();
$view->assign('news.php', $news);
$view->display('news.php');