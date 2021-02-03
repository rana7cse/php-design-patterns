<?php


namespace App\Creational\AbstractFactory;



class ClassicalFurnitureFactory implements FurnitureFactory {

    public function createTable() : AbstractTable
    {
        return new ClassicalTable();
    }

    public function createChair() : AbstractChair
    {
        return new ClassicalChair();
    }
}