<?php


namespace App\Creational\AbstractFactory;


interface FurnitureFactory
{
    public function createTable();
    public function createChair();
}