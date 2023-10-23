<?php

class Categories
{
    use Animal;
    
    public $animal;

    function __construct($_animal)
    {
        $this->animal = $_animal;
    }
}

$dog_categories = new Categories('cane');
$cat_categories = new Categories('gatto');