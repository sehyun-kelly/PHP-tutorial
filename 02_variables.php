<?php

// What is a variable
/*
 * PHP is not a strongly typed language - don't specify types when declaring variables
 * variables are dynamic - type determined as code written
 */

// Variable types
// start with $ followed by variable name - must start with a character


/*
 * Variable types:
 * String
 * Integer
 * Float/Double
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */
// Declare variables
$name = 'Kelly';
$age = '28';
$isMale = false;
$height = 1.73;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.' '.$age.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name).'<br>';

// Variable checking functions
is_string($name); //false
is_int($age); //true
is_bool($isMale); //true
is_double($height); //true


// Check if variable is defined
isset($name); //true
isset($address); //false

// Constants
define('PI', 3.14);
echo PI.'<br>';


// Using PHP built-in constants
echo SORT_ASC.'<br>'; // sort ascending
echo PHP_INT_MAX.'<br>';