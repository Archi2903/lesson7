<?php

// Хранит одно сообщение данного класса
class GuestBookRecord
{
//  одно сообщение
    protected $message;

    // Присваивает сообщение при вызове класса GuestBookRecord()
    public function __construct($message)
    {
        $this->message = $message;
    }

    // Возвращает сообщение при вызове метода getMessage()
    public function getMessage()
    {
        return $this->message;
    }
}