<?php

//Model for 1 new
class Article
{
    // свойство id
    protected $id;
    // свойство данные
    protected $data;
    // свойство путь файла
    protected $filePath;

    public function __construct($filePath, $id)
    {
        // присвоение путь файла
        $this->filePath = $filePath;
        // присвоение id
        $this->id = $id;
        // прочтение данных
        $this->data = file($this->filePath);
    }

    // получение id
    public function getId()
    {
        return $this->id;
    }

    // получение статьи по id
    public function getArticle()
    {
        return $this->data[$this->getId()];
    }
}