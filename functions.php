<?php

// Function which prints "Hello user"
function hello () {
    echo 'Hello world, I am PHP';
}


// Function with argument
function greetUser ($name) {
    return "Hello world, I am $name";
}

// Create sum of two functions
// function sum ($a, $b) {
//     return $a + $b;
// }


// Create function to sum all numbers using ...$nums

function sum (...$nums) {
    $total = 0;

    foreach ($nums as $num) {
        $total += $num;
    }
    return $total;
}

echo sum(3,4,5);


// Arrow functions
function sum2 (...$nums) {
    return array_reduce($nums, fn($accumulator, $n) => $accumulator + $n);
}

echo sum2(3,4,5);
