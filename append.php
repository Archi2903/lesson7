<?php
// подключаем классы
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';

// Создаем новые обьекты

// обьект класса Guestbook с указанием пути до базы данных
$guestBook = new GuestBook();
/* обьект класса GuestBookRecord с указанием строки,
которая представляет из себя суперглобальную переменную $POST с ключом text*/
$record = new GuestBookRecord($_POST['text']);
// вызов метода append() из класса GuestBook
$guestBook->append($record);
//var_dump($guestBook->getRecords());die;

$guestBook->save();

header('Location: template.php');