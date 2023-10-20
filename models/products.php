<?php

class Products
{
    public $price;
    public $name;
    public $categories;
    public $type;
    public $image;

    function __construct($_name, $_price, Categories $Categories, $_type)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->categories = $Categories;
        $this->type = $_type;
    }

    function getIcon()
    {
        if (strtolower($this->categories->animal) == 'cane') {
            return 'icona cane';
        } elseif (strtolower($this->categories->animal) == 'gatto') {
            return 'icona gatto';
        } {
        }
    }
};



$products = [
    new Products('Croccantini', 9.99, $dog_categories, 'Cibo'),
    new Products('Carne', 29.90, $dog_categories, 'Cibo'),
    new Products('Cuccia', 100.99, $dog_categories, 'Altro'),
    new Products('Lettiera', 29.90, $cat_categories, 'Gioco'),
    new Products('Spazzola', 4.99, $dog_categories, 'Altro'),
    new Products('Pesce', 9.99, $cat_categories, 'Cibo'),
 
];




/* var_dump($cat_products);
var_dump($dog_products); */