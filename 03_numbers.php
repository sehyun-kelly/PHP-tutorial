<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b * $c;
echo '<br>'.'a = '.$a;

// Assignment with math operators
$a += 1;

echo '<br>'.'a = '.$a;

// Increment operator
$a++;
echo '<br>'.'a = '.$a;

// Decrement operator
$a--;
echo '<br>'.'a = '.$a;

// Number checking functions
is_float(1.25); //true
is_double(1.25); //true
is_int(5); //true
is_numeric("3.45"); //true
is_numeric("3g.45"); //false

// Conversion
$strNumber = '12.34';

//casting
$number = (float)$strNumber;
$number2 = floatval($strNumber);
$number3 = (int)$strNumber;
$number4 = intval($strNumber);
echo '<br>';
var_dump($number);
echo '<br>';
var_dump($number2);
echo '<br>';
var_dump($number3);
echo '<br>';
var_dump($number4);
echo '<br>';

// Number functions

//abs, pow, sqrt, max, min, round, floor, ceil
echo "abs(-15) = ".abs(-15).'<br>';

// Formatting numbers
$number = 123456789.12345;
//number_format(variable, number of decimals, decimal separator, thousands separator)
echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php
