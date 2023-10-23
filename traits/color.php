<?php
trait Color
{
    public function setColor($_color)
    {
        $this->color = $_color;
    }

    public function getColor()
    {
        return $this->color;
    }
}