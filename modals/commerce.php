<?php
class commerce
{
    public $price;
    public $name;

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
};

class Categories extends commerce
{
    public $animal;

    function __construct($_animal)
    {
        $this->animal = $_animal;
    }
}

$commerce = new commerce('cuccia', 9.99);
var_dump($products);

$categories = new Categories('Cane');
var_dump($categories);