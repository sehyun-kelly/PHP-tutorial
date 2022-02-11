<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo "1";
}

// Without circle braces
if ($age === 20) echo "1";

// Sample if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}

// Difference between == and ===
$age == 20; //true
$age == '20'; //true

$age === 20; //true
$age === '20'; //false since type is different

// if AND &&

// if OR ||

// Ternary if
echo $age < 22 ? 'under 22' : 'over 22';

// Short ternary
$myAge = $age ?: '18';
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

echo '<pre>';
var_dump($myName);
echo '</pre>';

// switch
$userRole = 'admin';
switch($userRole){
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    default:
        echo 'Invalid role';
}
