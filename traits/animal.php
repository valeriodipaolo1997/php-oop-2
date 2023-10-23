<?php
trait Animal
{
    function setAnimal($_animal)
    {
        $this->animal = $_animal;
    }

    function getAnimal()
    {
        return $this->animal;
    }
}