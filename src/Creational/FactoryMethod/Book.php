<?php


namespace App\Creational\FactoryMethod;


class Book
{
    private $name;
    private $author;

    public function __construct($name, $author)
    {
        $this->name = $name;
        $this->author = $author;
    }

    public function getInfo()
    {
        return "$this->name -- Written by $this->author";
    }
}