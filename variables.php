<?php

/**
 * Declare a variable
 * Since php is a loosely type language, we 
 * do not declare the type of variable explicitely.
 * 
 * Types in PHP
 * String
 * Integer
 * Float
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 * 
 */


$name = 'Mike';
$age = 20; 
$isMale = true;
$height = 1.85;
$salary = null;


# Print the variable
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';  # false becomes an empty string
echo $height.'<br>';
echo $salary.'<br>';  # null s converted to an empty string


# Get the type of the variabale
echo gettype(($name)).'<br>';
echo gettype(($age)).'<br>';
echo gettype(($isMale)).'<br>';
echo gettype(($height)).'<br>';
echo gettype(($salary)).'<br>';

# Print the whole variable information
var_dump($name, $salary, $age, $isMale);

# Change the value of a variable
$name = 'Sarah';

# Variable checking functions
is_string($name); // true or false
is_int($age);
is_bool($isMale);
$foo = is_double($height);

echo '<br>';
echo $foo;

# Check if variable is declared
isset($name); // true or false
isset($address);


# Constants
define('PI', 3.14);

# Print out or access the constant
echo PI;

# Built in Constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';

?>