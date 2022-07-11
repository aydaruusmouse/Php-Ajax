<?php
    // Echo and Print
    // echo "hello world";
    // print "Hello Aido";







// Variables
$name= "Aido";
$num= 10;
$boolen= true;

// echo $name + $num + $boolen;
// echo $boolen + $num;
// echo $name;


// Array
$numbers= [2,3,5,9,10,22,4,7];
// print_r($numbers);
// // Array Methods
// // push add element at the end of array
// array_push($numbers, 100);
// print_r($numbers);

// // pop remove element at the end of array
// array_pop($numbers);
// print_r($numbers);

// // unshif add element at the begining of array
// array_unshift($numbers, 80);
// print_r($numbers);
// // Shift remove element at the begening
// array_shift($numbers);
// print_r($numbers);

// // count 

// echo count($numbers);

// // Sort Array

// array_multisort($numbers);
// print_r($numbers);

// sort($numbers);


// Array Merge add two or more array
$numbers= [2,3,5,9,10,22,4,7];
$odds= [20,40,60,80];
$All= array_merge($numbers, $odds);
print_r($All);
// 

// Assositive array

$phone_numbers= [
    "Ahmed" => "252 63 2347242",
    "Aido" => "252 63 24727372394"
];
print_r($phone_numbers);
print_r($phone_numbers["Aido"]);

// Add elemet
$phone_numbers["khadar"] = "252 63 45347305";
print_r($phone_numbers);
// 
// print_r($numbers);

// print($numbers[0]);
?>