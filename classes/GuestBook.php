<?php


class GuestBook
{
    // свойство Путь до файла
    protected $path;
    // свойство Данные представленные в массиве
    protected $data = [];
    // конструктор(вызывается автоматически при создании обьекта GuestBook )
    // присваивает путь до файла который мы укажем
    // перезаписывает строку в файле на обьект класса
    public function __construct()
    {
        // присваивает полный канонический путь до файла в переменную $path
        $this->path = __DIR__ . '/../dataBase.txt';
        // Строки которые хранит наша база данных
        $lines = file($this->path, FILE_IGNORE_NEW_LINES);
        // При прохождении по строкам базы данных ,перезаписываем строку на обьект класса GuestBookRecord
        foreach ($lines as $record) {
            $this->data[] = new GuestBookRecord($record);
        }
    }

//Функция возвращает массив обьектов класса GuestBook
    public function getRecords()
    {
        return $this->data;

    }

// метод добаляет в базу данных новую запись
    public function append(GuestBookRecord $record)
    {
        // добавляет новую запись в массив
        $this->data[] = $record;
    }

    public function save()
    {
        $records = [];

        foreach ($this->data as $record) {
            $records[] = $record->getMessage();
        }
        // добавляет в базу данных новую запись
        file_put_contents($this->path, implode(PHP_EOL, $records));
    }

}