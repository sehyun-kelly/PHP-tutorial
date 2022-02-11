<?php

// while

// Loop with $counter
$counter = 0;
echo 'while loop'.'<br>';
while($counter < 10){
    echo $counter.'<br>';
    $counter++;
}

// do - while
echo 'do - while loop'.'<br>';
do{
    echo $counter.'<br>';
    $counter--;
} while($counter > 0);

// for
for($i = 0; $i < 10; $i++){
    echo "i is $i".'<br>';
}

// foreach
$fruits = ["apple", "banana", "peach"];
foreach ($fruits as $i => $fruit){
    echo "$i $fruit".'<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'traversy',
    'age' => 30,
    'hobby' => ['Tennis', 'pc'],
];

foreach ($person as $key => $value){
    if(is_array($value)){
        echo $key.' '.implode(",", $value).'<br>';
    }else {
        echo "$key = $value".'<br>';
    }
}