<?php


namespace App\Creational\AbstractFactory;


class ClassicalTable implements AbstractTable
{

    public function showInfo()
    {
        echo "Classical table <br>";
    }
}