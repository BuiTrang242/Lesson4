<?php
include_once('Circle.php');
include_once('Rectangle.php');
include_once('Square.php');
//tạo mảng
$shapes = [
    new Circle('Circle 1', 10),
    new Rectangle('Rectangle 1', 10, 5),
    new Square('Square 1', 10)
];
//Hiển thị thông tin trước và sau khi thay đổi kích thước
foreach ($shapes as $shape) {
    echo "Shape: " . get_class($shape) . "(" . $shape->name . ")<br>";//Lấy tên lớp của đối tượng hiện tại (Circle, Rectangle, hoặc Square).
    echo "Originsl Area: " . $shape->calculateArea() . "<br>";//diện tích ban đầu

    //Tăng kích thước
    $percent = rand(1, 100);
    // $percent = 50;
    echo "Resizing by $percent%...<br>";
    $shape->resize($percent);

    echo "Resized Area: " . $shape->calculateArea() . "<br><br>";//diện tích thay đổi
}
