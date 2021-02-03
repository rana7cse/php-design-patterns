<?php


namespace App\Structural\Adapter;


class Book implements BookInterface
{

    public function next()
    {
        echo "Go to next page <br>";
    }

    public function read()
    {
        echo "Open and start <br>";
    }
}