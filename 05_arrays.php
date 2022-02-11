<?php

// Create array
$fruits = ["banana", "apple", "orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); //true
isset($fruits[3]); //false

// Append element
$fruits[] = 'Strawberry';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'mango');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits,'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Peach";

echo '<pre>';
var_dump(explode(',', $string));
echo '</pre>';

// Combine array elements into string
echo implode("&", $fruits);

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('apple', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
array_search('apple', $fruits);
echo '</pre>';

// Merge two arrays
$veg = ["tomato","mushroom"];

echo '<pre>';
var_dump(array_merge($fruits, $veg));
var_dump([...$fruits, ...$veg]);
echo '</pre>';

// Sorting of array (Reverse order also)
echo '<pre>';
var_dump($fruits);
echo '</pre>';
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'traversy',
    'age' => 30,
    'hobby' => ['Tennis', 'pc']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'media';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
$person['address'] = $person['address'] ?? 'unknown';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Check if array has specific key
echo isset($person['name']);

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';


// Two dimensional arrays

$todos = [
    ['title' => 'title1', 'completed' => true],
    ['title' => 'title2', 'completed' => false]
];

echo '<pre>';
var_dump($todos);
echo '</pre>';