<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];
$berries = array('Strawberry', 'Blueberry');

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
var_dump($fruits[0]).'<br>';

// Set element by index
$fruits[0] = 'Peach';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); // true or false

// Append element to the array
$fruits[] = 'Watermelon';

// Print the length of the array
echo count($fruits);

// Add element at the end of the array
array_push($fruits, 'Cucumber');

// Remove element from the end of the array
echo array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Dates');

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = 'Cats,Dogs,Parrots';
$animalsArray = explode(',', $string);

echo '<pre>';
var_dump($animalsArray);
echo '</pre>';

// Combine array elements into string
echo implode(',', $fruits);

// Check if element exist in the array
echo in_array('Apple', $fruits);

// Search element index in the array
// if the element is found, the index is returned otherwise false
var_dump(array_search('Mango', $fruits));

// Merge two arrays
$veg = ['Potatoes'];

echo '<pre>';
var_dump(array_merge($fruits, $veg));
echo '</pre>';

echo '<pre>';
var_dump([...$fruits, ...$veg]);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits);
rsort($fruits); // reverse order

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
    'surname' => 'Traversy',
    'age' => 14,
    'hobbies' => ['Tennis'],
];

// Get element by key
print_r($person['name']).'<br>';
print_r($person['address']).'<br>';


// Set element by key
$person['channel'] = 'YT';

echo '<pre>';
var_dump($person['channel']);
echo '</pre>';


// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

$person['address'] ??= 'unknown'; // if the value is set or not
$person['address'] = $person['address'] ?? 'unknown';

echo '<pre>';
var_dump($person);
echo '</pre>';


// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';


// Sorting associative arrays by values, by keys
ksort($person); // by keys
asort($person); // by values


echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    ['title' => 'Title one', 'completed' => false],
    ['title' => 'Title two', 'completed' => true],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';
