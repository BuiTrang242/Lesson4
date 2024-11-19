<?php
include_once('Rectangle.php');
include_once('Colorable.php'); // Kết nối interface Colorable

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width); // Vì Square là hình vuông, nên chiều rộng = chiều cao
    }

    // Triển khai phương thức howToColor từ interface Colorable
    public function howToColor()
    {
        return "Color all four sides.";
    }
}
