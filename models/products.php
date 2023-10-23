<?php

class Products
{
    public $price;
    public $name;
    public $categories;
    public $type;
    public $image;
    public $color;

    function __construct($_name, $_price, Categories $Categories, $_type, $_color)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->categories = $Categories;
        $this->type = $_type;
        $this->color = $_color;
    }

    function getIcon()
    {
        if (strtolower($this->categories->animal) == 'cane') {
            return '<img width="40" src="./models/img/cane.jpg" alt="Icona di un cane">';
        } elseif (strtolower($this->categories->animal) == 'gatto') {
            return '<img width="40" src="./models/img/cats.jpg" alt="Icona di un Gatto">';
        } {
        }
    }
};



$products = [
    new Products('Croccantini', 9.99, $dog_categories, 'Cibo', 'Nero'),
    new Products('Carne', 29.90, $dog_categories, 'Cibo', 'Nero'),
    new Products('Cuccia', 100.99, $dog_categories, 'Altro', 'Nero'),
    new Products('Lettiera', 29.90, $cat_categories, 'Gioco', 'Nero'),
    new Products('Spazzola', 4.99, $dog_categories, 'Altro', 'Nero'),
    new Products('Pesce', 9.99, $cat_categories, 'Cibo', 'Nero'),
    
 
];




/* var_dump($cat_products);
var_dump($dog_products); */