<?php


namespace App\Creational\FactoryMethod;


class BookFactory
{
    public static function make($name, $author)
    {
        return new Book($name, $author);
    }
}