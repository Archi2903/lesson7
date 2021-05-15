<?php
require_once __DIR__ . '/Article.php';


class News
{
    //
    protected $fieldFromName;
    // свойство путь
    protected $fileAdress;
    // свойство данные
    protected $data;


    public function __construct($fileAdress, $fieldFromName)
    {
        $this->fileAdress = $fileAdress;
        $this->fieldFromName = $fieldFromName;
        $this->data = file($this->fileAdress);

    }

    public function getNews()
    {
        return $this->data;
    }
}

