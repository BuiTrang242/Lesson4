<?php
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
include_once('Colorable.php'); // Kết nối với interface Colorable

// Tạo mảng các đối tượng hình học
$shapes = [
    new Circle('Circle 01', 3),
    new Rectangle('Rectangle 01', 3, 4),
    new Square('Square 01', 4)
];

// Duyệt qua mảng hình học
foreach ($shapes as $shape) {
    // Hiển thị diện tích của hình
    echo "Shape: " . get_class($shape) . " (" . $shape->name . ")\n";
    echo "Area: " . $shape->calculateArea() . "<br>";

    // Kiểm tra nếu đối tượng là Colorable
    if ($shape instanceof Colorable) {
        echo $shape->howToColor() . "<br>";  // Gọi phương thức howToColor() nếu đối tượng là Colorable
    }

    echo "-----------------------------<br>";
}
?>