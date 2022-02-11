<?php

class Person {
    public string $name;
    public string $lastName;
    private ?int $age;
    public static int $counter = 0;

    public function __construct($name, $lastName, $age){
        $this -> name = $name;
        $this -> lastName = $lastName;
        $this -> age = $age;
        self::$counter++;
    }

    public function setAge($age){
        $this -> age = $age;
    }

    public function getAge(){
        return $this -> age;
    }

    public static function getCounter(){
        return self::$counter;
    }
}