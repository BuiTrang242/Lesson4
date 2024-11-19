<?php
include_once('Employee.php');
include_once('Workable.php');
include_once('Designer.php');
include_once('Developer.php');
include_once('Manager.php');


$manager = new Manager('Manager 01', 1000);

$developer = new Developer('Developer 01', 1000);

$designer = new Designer('Designer 01', 1000);

echo $manager->getName() . " làm công việc " . $manager->work() . "<br>";
echo "Thưởng của :" . $manager->getName() . " la " . $manager->calculateBonus() . "<br><br>";
echo $developer->getName() . " làm công việc " . $developer->work() . "<br>";
echo "Thưởng của :" . $developer->getName() . " la " . $developer->calculateBonus() . "<br><br>";
echo $designer->getName() . " làm công việc " . $designer->work() . "<br>";
echo "Thưởng của :" . $designer->getName() . " la " . $designer->calculateBonus() . "<br><br>";
