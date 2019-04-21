<?php

include("Furniture.php");

class Cupboard extends Furniture
{
    private $height;
    private $width;
    private $depth;

    public function __construct($height, $width, $depth)
    {
        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
    }

    public function openDoor()
    {
        echo "Дверь открывается!";
    }

    public function closeDoor()
    {
        echo "Дверь закрывается";
    }

    public function calculateVolume()
    {
        return $this->depth * $this->width * $this->height;
    }
}