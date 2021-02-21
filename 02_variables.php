<?php

// What is a variable

// Variable types
//8 types of vars
//String, Integer, Float, Boolean, Null, Array, Object, Resourse

// Declare variables
$name = "Claire";
$age = "20";
$isMale = true; //False will print empty string
$height = 1.85;
$salary = null;
// Print the variables. Explain what is concatenation
//Print the Vars
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>'; //Print Null will not show anything

// Print types of the variables
echo gettype($name). '<br>';
echo gettype($age). '<br>';
echo gettype($isMale). '<br>';
echo gettype($height). '<br>';
echo gettype($salary). '<br>';

// Print the whole variable

var_dump($name). '<br>';
var_dump($age). '<br>';
var_dump($isMale). '<br>';
var_dump($height). '<br>';
var_dump($salary). '<br>';


// Change the value of the variable
$name = 28;
echo gettype($name);
// Print type of the variable
is_string($name);


// Variable checking functions
var_dump(is_string($name));
var_dump(is_integer($name));
// Check if variable is defined
isset($address);
var_dump(isset($address));
var_dump(isset($name));
var_dump(isset($age));
var_dump(isset($salary));//Null will display false

// Constants
//DONT USE DOLLAR SIGN
define('PI', 3.14);
echo PI;
definied("PI"); // TURE

// Using PHP built-in constants
echo PHP_INT_MAX;
