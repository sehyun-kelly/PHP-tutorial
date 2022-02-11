<?php

// Function which prints "Hello I am Zura"
//function hello(){
//    echo 'Hello I am Zura'.'<br>';
//}
//
//hello();
//hello();
//hello();

// Function with argument
function hello($name){
    return "hello I am $name<br>";
}

echo hello('kelly');
echo hello('brad');

// Create sum of two functions
//function sum($a, $b){
//    return $a + $b;
//}
//
//echo sum(4, 5);

// Create function to sum all numbers using ...$nums
function sum(...$nums)
{
    $sum = 0;

    foreach($nums as $num){
        $sum += $num;
    }

    return $sum;
}

echo sum(1, 2, 3, 4, 5, 6);

// Arrow functions
echo '<br>';

function sum2(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}

echo sum2(1, 2, 3, 4, 5, 6);