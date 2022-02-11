<?php

// What is class and instance

require_once "Person.php";
require_once "Student.php";

$p = new Person('Kelly', 'Park', 29);
$p2 = new Person('Kelly', 'Park', 29);
$p -> setAge(45);
echo $p -> getAge();

echo '<pre>';
var_dump($p);
echo '</pre>';

echo Person::$counter;
echo Person::getCounter();

$s = new Student('amy', 'jones', 30, 'A011111');
echo '<pre>';
var_dump($s);
echo '</pre>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter