<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/View.php';

//class View
$view = new View();
// path template page
$temp = __DIR__ . '/template.php';
// method show page html
$view->display($temp);
//$view->assign('1','Brend');
//$view->assign('p','Hello world' );





//method return page HTML
//echo $view->render($pathHTML);

?>

