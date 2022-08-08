<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo '1';
}

// Without circle braces
if ($age === 20) echo '1';

// Sample if-else
if ($age > 20) {
    echo '1';
} else {
    echo '2';
}

/**
 * Difference between == and ===
 * 
 * Double equal sign compares values only and not the type.
 * Tripple equal signs checks even the types of the variable.
 */


if ($age == 20) echo '1';
if ($age == '20') echo '1';

// if AND
if ($age === 20 && $salary > 300000) echo '1';

// if OR
if ($age === 20 || $salary > 300000) echo '1';

// Ternary if
echo $age < 22 ? 'Young': 'Old';

// Short ternary
$myAge = $age ?: 50;
echo '<br>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch
$userRole = 'admin'; 


switch ($userRole) {
    case 'admin':
        echo 'Admin';
        break;
    default:
        echo 'Invalid role';
}
